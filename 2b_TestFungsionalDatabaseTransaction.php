<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    // Function untuk testing insert data dosen ke dalam tabel dosen
    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '016',
            'nidn' => '0510077302',
            'nama' => 'Murinto, S.Si., M.Kom.',
            'jabfung' => 'L',
            'email_dosen' => 'murintokusno@tif.uad.ac.id',
            'avatar' => 'murinto.jpg'
        ]);

        $this->assertEquals('016', $dosen->nipy);
        $this->assertEquals('0510077302', $dosen->nidn);
        $this->assertEquals('Murinto, S.Si., M.Kom.', $dosen->nama);
        $this->assertEquals('L', $dosen->jabfung);
        $this->assertEquals('murintokusno@tif.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('murinto.jpg', $dosen->avatar);
    }
}
