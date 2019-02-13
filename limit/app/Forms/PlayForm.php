<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class PlayForm extends Form
{
    public function buildForm()
    {
        $this->formOptions = [
            'method' => 'POST',
            'url' => route('leaderboard')
        ];

        $this
            ->add('pseudo', 'text')
            ->add('create', 'submit');
    }
}
