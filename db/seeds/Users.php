<?php


use Phinx\Seed\AbstractSeed;

class Users extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $data = array(
            array(
                'username' => 'ardianta',
                'name' => 'Ardianta',
                'email' => 'ardianta@petanikode.com',
                'password' => password_hash('kopi', PASSWORD_DEFAULT)
            ),
            array(
                'username' => 'admin',
                'name' => 'Admin',
                'email' => 'info@petanikode.com',
                'password' => password_hash("admin", PASSWORD_DEFAULT)
            ),
            array(
                'username' => 'petanikode',
                'name' => 'Petani Kode',
                'email' => 'petani@petanikode.com',
                'password' => password_hash("admin", PASSWORD_DEFAULT)
            )

        );

        $user = $this->table('users');
        $user->insert($data)->save();
    }
}
