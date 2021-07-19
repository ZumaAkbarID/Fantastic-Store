<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
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

	// Register & Login
	public $register = [
		'username' => [
			'rules' => 'required|min_length[5]|is_unique[user.username]'
		],
		'password' => [
			'rules' => 'required|min_length[4]'
		],
		'repeatPassword' => [
			'rules' => 'required|matches[password]'
		]
	];

	public $register_errors = [
		'username' => [
			'required' => 'Username tidak boleh kosong',
			'min_length' => 'Username minimal 5 karakter',
			'is_unique' => 'Username telah dipakai'
		],
		'password' => [
			'required' => 'Password tidak boleh kosong',
			'min_length' => 'Password minimal 4 karakter'
		],
		'repeatPassword' => [
			'required' => 'Password harus diulangi',
			'matches' => 'Password harus sama'
		]
	];

	public $login = [
		'username' => [
			'rules' => 'required|min_length[5]'
		],
		'password' => [
			'rules' => 'required|min_length[4]'
		]
	];

	public $login_errors = [
		'username' => [
			'required' => 'Username tidak boleh kosong',
			'min_length' => 'Username minimal 5 karakter'
		],
		'password' => [
			'required' => 'Password tidak boleh kosong',
			'min_length' => 'Password minimal 4 karakter'
		]
	];

	public $barang = [
		'nama' => [
			'rules' => 'required|min_length[3]',
		],
		'harga' => [
			'rules' => 'required|is_natural',
		],
		'stok' => [
			'rules' => 'required|is_natural',
		],
		'gambar' => [
			'rules' => 'uploaded[gambar]|ext_in[gambar,png,jpg,gif]|is_image[gambar]',
		],
		'deskripsi' => [
			'rules' => 'required|min_length[20]'
		]
	];

	public $barang_errors = [
		'nama' => [
			'required' => 'Nama Barang Harus diisi',
			'min_length' => 'Nama Barang Minimum 3 karakter',
		],
		'harga' => [
			'required' => 'Harga Harus diisi',
			'is_natural' => 'Harga Tidak Boleh Negatif',
		],
		'stok' => [
			'required' => 'Stok Harus diisi',
			'is_natural' => 'Stok Tidak Boleh Negatif',
		],
		'gambar' => [
			'uploaded' => 'Gambar Harus di upload',
			'ext_in' => 'Ekstensi Tidak Diizinkan, hanya boleh png, jpg, dan gif',
			'is_image' => 'File harus gambar'
		],
		'deskripsi' => [
			'required' => 'Deskripsi Tidak Boleh Kosong',
			'min_length' => 'Minimal 20 Karakter'
		]
	];

	public $barangupdate = [
		'nama' => [
			'rules' => 'required|min_length[3]',
		],
		'harga' => [
			'rules' => 'required|is_natural',
		],
		'stok' => [
			'rules' => 'required|is_natural',
		],
		'deskripsi' => [
			'rules' => 'required|min_length[20]'
		]
	];

	public $barangupdate_errors = [
		'nama' => [
			'required' => 'Nama Barang Harus diisi',
			'min_length' => 'Nama Barang Minimum 3 karakter',
		],
		'harga' => [
			'required' => 'Harga Harus diisi',
			'is_natural' => 'Harga Tidak Boleh Negatif',
		],
		'stok' => [
			'required' => 'Stok Harus diisi',
			'is_natural' => 'Stok Tidak Boleh Negatif',
		],
		'deskripsi' => [
			'required' => 'Deskripsi Tidak Boleh Kosong',
			'min_length' => 'Minimal 20 Karakter'
		]
	];
}