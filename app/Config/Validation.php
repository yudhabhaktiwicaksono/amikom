<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    public $pengajuan = [
        'username' => [
        'rules' => 'required'
        ],
        'telpon_pengajuan' => [
        'rules' => 'required'
        ],
        'tanggal_pengajuan' => [
        'rules' => 'required'
        ],
        'isi_pengajuan' => [
        'rules' => 'required'
        ],
        ]; 
    public $update_pengajuan = [
        'username' => [
        'rules' => 'required'
        ],
        'telpon_pengajuan' => [
        'rules' => 'required'
        ],
        'tanggal_pengajuan' => [
        'rules' => 'required'
        ],
        'isi_pengajuan' => [
        'rules' => 'required'
        ],
        ]; 
    public $register = [
        'nim' => [
        'rules' => 'required|is_unique[users.nim]',
        ],
        'username' => [
        'rules' => 'required|is_unique[users.username]',
        ],
        'email' => [
        'rules' => 'required',
        ],
        'password' => [
        'rules' => 'required',
        ],
        ];
        public $update_user = [
        'nim' => [
        'rules' => 'required|is_unique[users.nim]',
        ],
        'username' => [
        'rules' => 'required|is_unique[users.username]',
        ],
        'email' => [
        'rules' => 'required',
        ],
        'password' => [
        'rules' => 'required',
        ],
        'mode' => [
        'rules' => 'user',
        ],
        ];
}
