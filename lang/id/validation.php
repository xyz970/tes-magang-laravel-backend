<?php

return [
    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut ini berisi standar pesan kesalahan yang digunakan oleh
    | kelas validasi. Beberapa aturan mempunyai banyak versi seperti aturan 'size'.
    | Jangan ragu untuk mengoptimalkan setiap pesan yang ada di sini.
    |
    */

    'accepted'        => 'Kolom harus diterima.',
    'active_url'      => 'Kolom bukan URL yang valid.',
    'after'           => 'Kolom harus berisi tanggal setelah :date.',
    'after_or_equal'  => 'Kolom harus berisi tanggal setelah atau sama dengan :date.',
    'alpha'           => 'Kolom hanya boleh berisi huruf.',
    'alpha_dash'      => 'Kolom hanya boleh berisi huruf, angka, strip, dan garis bawah.',
    'alpha_num'       => 'Kolom hanya boleh berisi huruf dan angka.',
    'array'           => 'Kolom harus berisi sebuah array.',
    'before'          => 'Kolom harus berisi tanggal sebelum :date.',
    'before_or_equal' => 'Kolom harus berisi tanggal sebelum atau sama dengan :date.',
    'between'         => [
        'numeric' => 'Kolom harus bernilai antara :min sampai :max.',
        'file'    => 'Kolom harus berukuran antara :min sampai :max kilobita.',
        'string'  => 'Kolom harus berisi antara :min sampai :max karakter.',
        'array'   => 'Kolom harus memiliki :min sampai :max anggota.',
    ],
    'boolean'        => 'Kolom harus bernilai true atau false',
    'confirmed'      => 'Konfirmasi Kolom tidak cocok.',
    'date'           => 'Kolom bukan tanggal yang valid.',
    'date_equals'    => 'Kolom harus berisi tanggal yang sama dengan :date.',
    'date_format'    => 'Kolom tidak cocok dengan format :format.',
    'different'      => 'Kolom dan :other harus berbeda.',
    'digits'         => 'Kolom harus terdiri dari :digits angka.',
    'digits_between' => 'Kolom harus terdiri dari :min sampai :max angka.',
    'dimensions'     => 'Kolom tidak memiliki dimensi gambar yang valid.',
    'distinct'       => 'Kolom memiliki nilai yang duplikat.',
    'email'          => 'Kolom harus berupa alamat surel yang valid.',
    'ends_with'      => 'Kolom harus diakhiri salah satu dari berikut: :values',
    'exists'         => 'Kolom yang dipilih tidak valid.',
    'file'           => 'Kolom harus berupa sebuah berkas.',
    'filled'         => 'Kolom harus memiliki nilai.',
    'gt'             => [
        'numeric' => 'Kolom harus bernilai lebih besar dari :value.',
        'file'    => 'Kolom harus berukuran lebih besar dari :value kilobita.',
        'string'  => 'Kolom harus berisi lebih besar dari :value karakter.',
        'array'   => 'Kolom harus memiliki lebih dari :value anggota.',
    ],
    'gte' => [
        'numeric' => 'Kolom harus bernilai lebih besar dari atau sama dengan :value.',
        'file'    => 'Kolom harus berukuran lebih besar dari atau sama dengan :value kilobita.',
        'string'  => 'Kolom harus berisi lebih besar dari atau sama dengan :value karakter.',
        'array'   => 'Kolom harus terdiri dari :value anggota atau lebih.',
    ],
    'image'    => 'Kolom harus berupa gambar.',
    'in'       => 'Kolom yang dipilih tidak valid.',
    'in_array' => 'Kolom tidak ada di dalam :other.',
    'integer'  => 'Kolom harus berupa bilangan bulat.',
    'ip'       => 'Kolom harus berupa alamat IP yang valid.',
    'ipv4'     => 'Kolom harus berupa alamat IPv4 yang valid.',
    'ipv6'     => 'Kolom harus berupa alamat IPv6 yang valid.',
    'json'     => 'Kolom harus berupa JSON string yang valid.',
    'lt'       => [
        'numeric' => 'Kolom harus bernilai kurang dari :value.',
        'file'    => 'Kolom harus berukuran kurang dari :value kilobita.',
        'string'  => 'Kolom harus berisi kurang dari :value karakter.',
        'array'   => 'Kolom harus memiliki kurang dari :value anggota.',
    ],
    'lte' => [
        'numeric' => 'Kolom harus bernilai kurang dari atau sama dengan :value.',
        'file'    => 'Kolom harus berukuran kurang dari atau sama dengan :value kilobita.',
        'string'  => 'Kolom harus berisi kurang dari atau sama dengan :value karakter.',
        'array'   => 'Kolom harus tidak lebih dari :value anggota.',
    ],
    'max' => [
        'numeric' => 'Kolom maksimal bernilai :max.',
        'file'    => 'Kolom maksimal berukuran :max kilobita.',
        'string'  => 'Kolom maksimal berisi :max karakter.',
        'array'   => 'Kolom maksimal terdiri dari :max anggota.',
    ],
    'mimes'     => 'Kolom harus berupa berkas berjenis: :values.',
    'mimetypes' => 'Kolom harus berupa berkas berjenis: :values.',
    'min'       => [
        'numeric' => 'Kolom minimal bernilai :min.',
        'file'    => 'Kolom minimal berukuran :min kilobita.',
        'string'  => 'Kolom minimal berisi :min karakter.',
        'array'   => 'Kolom minimal terdiri dari :min anggota.',
    ],
    'not_in'               => 'Kolom yang dipilih tidak valid.',
    'not_regex'            => 'Format Kolom tidak valid.',
    'numeric'              => 'Kolom harus berupa angka.',
    // 'password'             => 'Kata sandi salah.',
    'password' => [
        'letters' => 'Kolom harus berisi setidaknya satu huruf.',
        'mixed' => 'Kolom harus berisi setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => 'Kolom harus berisi setidaknya satu angka.',
        'symbols' => 'Kolom harus berisi setidaknya satu simbol.',
        'uncompromised' => 'Kolom yang diberikan telah muncul dalam kebocoran data. Silakan pilih yang berbeda Kolom.',
    ],
    'present'              => 'Kolom wajib ada.',
    'regex'                => 'Format Kolom tidak valid.',
    'required'             => 'Kolom wajib diisi.',
    'required_if'          => 'Kolom wajib diisi bila :other adalah :value.',
    'required_unless'      => 'Kolom wajib diisi kecuali :other memiliki nilai :values.',
    'required_with'        => 'Kolom wajib diisi bila terdapat :values.',
    'required_with_all'    => 'Kolom wajib diisi bila terdapat :values.',
    'required_without'     => 'Kolom wajib diisi bila tidak terdapat :values.',
    'required_without_all' => 'Kolom wajib diisi bila sama sekali tidak terdapat :values.',
    'same'                 => 'Kolom dan :other harus sama.',
    'size'                 => [
        'numeric' => 'Kolom harus berukuran :size.',
        'file'    => 'Kolom harus berukuran :size kilobyte.',
        'string'  => 'Kolom harus berukuran :size karakter.',
        'array'   => 'Kolom harus mengandung :size anggota.',
    ],
    'starts_with' => 'Kolom harus diawali salah satu dari berikut: :values',
    'string'      => 'Kolom harus berupa string.',
    'timezone'    => 'Kolom harus berisi zona waktu yang valid.',
    'unique'      => 'Kolom sudah ada sebelumnya.',
    'uploaded'    => 'Kolom gagal diunggah.',
    'url'         => 'Format Kolom tidak valid.',
    'uuid'        => 'Kolom harus merupakan UUID yang valid.',

    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi Kustom
    |---------------------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi untuk atribut sesuai keinginan dengan menggunakan 
    | konvensi "attribute.rule" dalam penamaan barisnya. Hal ini mempercepat dalam menentukan
    | baris bahasa kustom yang spesifik untuk aturan atribut yang diberikan.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |---------------------------------------------------------------------------------------
    | Kustom Validasi Atribut
    |---------------------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk menukar 'placeholder' atribut dengan sesuatu yang
    | lebih mudah dimengerti oleh pembaca seperti "Alamat Surel" daripada "surel" saja.
    | Hal ini membantu kita dalam membuat pesan menjadi lebih ekspresif.
    |
    */

    'attributes' => [
    ],
];