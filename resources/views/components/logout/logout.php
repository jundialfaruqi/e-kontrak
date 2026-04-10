<?php

use Livewire\Component;

new class extends Component
{
    //
 public function logout()
    {
        auth()->logout();
        redirect()->to('/login');
    }
};
