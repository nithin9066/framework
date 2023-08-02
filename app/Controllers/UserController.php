<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;


class UserController extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }
    public function signUp()
    {
        return view('auth/sign_up');
    }
    public function processSignIn()
    {

        $validation = \Config\Services::validation();

        $validation->setRules(
            [
                'email' => 'required|valid_email',
                'password' => 'required|min_length[6]',
            ]
        );

        // Run the validation
        if (!$validation->withRequest($this->request)->run()) {
            // If validation fails, redirect back to the registration form with errors
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }


        // Retrieve the form input
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Find the user in the database
        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        if (!$user || !password_verify($password, $user->password)) {
            // Invalid credentials, show error message
            Alert('error', '', 'Invalid email or password');
            return redirect()->back();
        }

        // Store the user data in session for future reference
        session()->set('user', $user);

        // Redirect to the dashboard or home page
        return redirect()->to('/'); // Change 'dashboard' to your desired destination

    }
    public function processSignUp()
    {

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $validation = \Config\Services::validation();

        $validation->setRules(
            [
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[6]',
                'confirm_password' => 'required|matches[password]'
            ],
            [
                // Errors
                'email' => [
                    'is_unique' => 'Email id already exist',
                ],
                'confirm_password' => [
                    'matches' => 'The passwords do not match.',
                ],
            ]
        );

        // Run the validation
        if (!$validation->withRequest($this->request)->run()) {
            // If validation fails, redirect back to the registration form with errors
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // If validation passes, insert the user into the database
        $userModel = new UserModel();

        $userData = [
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];

        $userData = $userModel->insert($userData);

        Alert('success', '', "You have successfully registered. Please log in to continue.");

        return view('login');
    }

    public function logout() {
        session()->remove('user');
        return redirect()->to('/sign-in');
    }
}
