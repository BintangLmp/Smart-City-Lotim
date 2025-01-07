<?php

namespace Database\Seeders;

use App\Models\Biro;
use App\Models\User;
use App\Models\Prodi;
use App\Models\Bidang;
use App\Models\Dimensi;
use App\Models\Jabatan;
use App\Models\Category;
use App\Models\Pengurus;
use App\Models\Departemen;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User
        User::factory()->create([
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345678'),
            'name' => 'Admin',
        ]);

        // Jabatan
        Jabatan::insert([
            [
                'jabatan' => 'Ketua',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Wakil Ketua',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Sekretaris',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Bendahara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan' => 'Staff',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        // // Bidang
        // Bidang::insert([
        //     [
        //         'bidang' => 'Teknolon Infomrasi & Komunikasi',
        //         'kepala_bidang' => \App\Models\Pengurus::find(1)->id,
        //         'detail' => 'Bidang yang bertanggung jawab atas kegiatan riset dan teknologi.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'bidang' => 'Bidang Statistika',
        //         'kepala_bidang' => \App\Models\Pengurus::find(4)->id,
        //         'detail' => 'Bidang yang bertanggung jawab atas kegiatan pengabdian kepada masyarakat.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'bidang' => 'Bidang Persantdian',
        //         'kepala_bidang' => \App\Models\Pengurus::find(4)->id,
        //         'detail' => 'Bidang yang bertanggung jawab atas kegiatan pengabdian kepada masyarakat.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'bidang' => 'Bidang Opini',
        //         'kepala_bidang' => \App\Models\Pengurus::find(4)->id,
        //         'detail' => 'Bidang yang bertanggung jawab atas kegiatan pengabdian kepada masyarakat.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);

        Dimensi::insert([
            [
                'nama' => 'Smart Governance',
                'deskripsi' => 'Smart Governance Smart Governance diartikan sebagai tata kelola kota yang pintar serta tata pamong pemerintahan daerah yang secara cerdas mampu mengubah pola-pola tradisional dalam birokrasi sehingga menghasilkan business process yang lebih cepat, efektif, efisien, komunikatif dan selalu melakukan perbaikan.',
                'slug' => Str::slug('Smart Governance'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Smart Branding',
                'deskripsi' => 'Smart Branding merupakan sebuah inovasi dalam memasarkan daerahnya sehingga mampu meningkatkan daya saing, serta mampu menarik partisipasi masyarakat baik dari dalam maupun luar daerah, pelaku bisnis dan investor untuk mendorong percepatan pembangunan daerahnya. ',
                'slug' => Str::slug('Smart Branding'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Smart Economy',
                'deskripsi' => 'Smart Economy dalam Smart City dimaksudkan untuk mewujudkan ekosistem perekonomian di daerah yang mampu memenuhi tantangan di era informasi saat ini.',
                'slug' => Str::slug('Smart Economy'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Smart Living',
                'deskripsi' => 'Smart Living merupakan dimensi Smart City yang menjamin kelayakan taraf hidup masyarakat berdasarkan tiga elemen.',
                'slug' => Str::slug('Smart Living'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Smart Society',
                'deskripsi' => 'Smart society memfokuskan pada manusia sebagai unsur utama sebuah kota, dimana interaksi antar-warga terjalin semakin kuat dan tanpa sekat dengan kemajuan teknologi yang ada.',
                'slug' => Str::slug('Smart Society'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Smart Environment',
                'deskripsi' => 'Smart Environment merupakan pengelolaan tata kelola lingkungan dalam pembangunan kota dengan cara cerdas dengan memperhatikan faktor lingkungan hidup guna mewujudkan tata kelola lingkungan yang baik, bertanggung-jawab, dan berkelanjutan. Adapun unsur dalam smart environment meliputi: 1. Program perlindungan terhadap lingkungan (Protection), 2. Pengembangan tata kelola sampah dan limbah (Waste), 3. Pengembangan tata kelola energi yang bertanggungjawab (Energy).',
                'slug' => Str::slug('Smart Environment'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        // // Categories
        // Category::insert([
        //     [
        //         'category' => 'Technology',
        //         'slug' => 'technology',
        //         'detail' => 'All about the latest in technology.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'category' => 'Health',
        //         'slug' => 'health',
        //         'detail' => 'Health tips and news.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'category' => 'Education',
        //         'slug' => 'education',
        //         'detail' => 'Educational resources and news.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'category' => 'Finance',
        //         'slug' => 'finance',
        //         'detail' => 'Financial advice and updates.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'category' => 'Entertainment',
        //         'slug' => 'entertainment',
        //         'detail' => 'Latest in movies, music, and more.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);
    }
}
