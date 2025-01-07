    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        public function up()
        {
            Schema::create('destinasis', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->text('deskripsi');
                $table->string('gambar')->nullable(false);
                $table->string('lokasi');
                $table->decimal('rating', 2, 1)->nullable();
                $table->string('harga');
                $table->string('jam_operasional');
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('destinasis');
        }
    };