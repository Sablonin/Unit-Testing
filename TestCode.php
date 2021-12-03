<?php
// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php Test.php
// Include framework PHPUnit
use PHPUnit\Framework\TestCase;

// Memanggil class yang ingin dilakukan testing
require 'LoginPage.php';

// Class untuk running testing login
class TestCode extends TestCase
{
    public function TestLogin()
    {
        // Memanggil class yang ingin ditest.
        $Pl = new LoginPage();

        // Memberi kalimat dalam parameter sebanyak 2 kata, yang harusnya mendapatkan 2 output
        $TestSentence = "Login Success"; // 2 Kata ..
        $LoginPage = $Pl->ProcessLogin($TestSentence);

        // Output ketika berhasil login
        $this->assertEquals(2, $LoginPage);
    }
}
