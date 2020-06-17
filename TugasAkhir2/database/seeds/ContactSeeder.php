<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'alamat' => 'Jl. Padat Karya Kel.Sukamulya Kec. Cikupa Kab. Tangerang Banten 15710 Tlp. 021.59406032. WA: 08129670263',
            'no_hp' => '08129670263',
            'email' => 'cv.anugrahbangunperkasa@yahoo.co.id',
            'home' => 'Home',
            'produk' => 'Product',
            'client' => 'Client',
            'contact' => 'Contact'
        ]);
    }
}

