 <?php
 
    use App\Cargo;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;
     
    class DatabaseSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            
            $cargo = new Cargo;
            $cargo->nombre = 'Recepcionista';
            $cargo->save();

            $cargo = new Cargo;
            $cargo->nombre = 'Programador';
            $cargo->save();

            $cargo = new Cargo;
            $cargo->nombre = 'Analista';
            $cargo->save();


            $cargo = new Cargo;
            $cargo->nombre = 'Chef';
            $cargo->save();

            $cargo = new Cargo;
            $cargo->nombre = 'Vigilante';
            $cargo->save();
        }
    }
