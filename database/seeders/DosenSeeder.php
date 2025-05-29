<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DosenSeeder extends Seeder
{
    public function run(): void
    {
      
        $dosens = [
            ['nidn' => '195812311987031013', 'nama' => 'Drs. I Wayan Purwanta Suta, MAIB', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196208021987031001', 'nama' => 'I Nyoman Subratha, SE,MM', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196310261988032001', 'nama' => 'Anak Agung Putri Suardani, SE., MM', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196201231998111001', 'nama' => 'Drs. Ec.I Ketut Sukayasa,M.Com., Ak', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196007171988111001', 'nama' => 'I Ketut Sudiartha, SE., M.Pd', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196201091989031001', 'nama' => 'Drs.I Made Sumartana, M.Hum', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196410161989101001', 'nama' => 'Dr. Nyoman Sentosa Hardika,SE., Ak., MM', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '195912311988101001', 'nama' => 'Drs. I Made Sarjana, M.Agb', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196103061989101001', 'nama' => 'Drs. EC. Ida Bagus Anom Yasa, MM.,AK', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196204141990031003', 'nama' => 'Cening Ardina, SE., M.Agb', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196512211990031003', 'nama' => 'I Nyoman Abdi, SE.,M.eCom', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196405011990032001', 'nama' => 'Luh Mei Wahyuni, SE., M.M.A.', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196107031990031001', 'nama' => 'Anak Agung Gde Mantra Suarjana, SE, MM', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196203171990031001', 'nama' => 'I Putu Mertha Astawa, SE, MM', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196312311990031023', 'nama' => 'Drs. Ec. I Ketut Suandi, M.Pd.Ak', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196110161990032001', 'nama' => 'Dra. Ni Nyoman Yintayani, M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196112281990031001', 'nama' => 'I Made Sudana, SE.,M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196509011990031001', 'nama' => 'I Dewa Made Partika, SE, M.Com', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196210181990031003', 'nama' => 'I Made Marsa Arsana, SE.,M.M.A', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196012311990031015', 'nama' => 'I Nyoman Sugiarta, SE.,M.M.A', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196302251990031004', 'nama' => 'Dr. Ir. I Made Suarta, SE, MT', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196406241990031002', 'nama' => 'Drs. I Made Wijana, MSc., ST.', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196012311990031018', 'nama' => 'Drs. I Dewa Made Mahayana, M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196207191990031002', 'nama' => 'Dr. Ir. I Gede Made Karma, MT', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196107061990031004', 'nama' => 'Drs. I Nyoman Mandia, M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196303201990112001', 'nama' => 'Dra. Putu Dyah Hudiananingsih, M.Hum', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196201061992121001', 'nama' => 'I Komang Sugiarta, SE, M.M.A', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196212191993031002', 'nama' => 'Drs. I Nyoman Sukra, M.Hum', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196705111993031003', 'nama' => 'I Made Sura Ambara Jaya, SE, M.M.A', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196106221993031001', 'nama' => 'Drs. Paulus Subiyanto, M.Hum', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196602261993032001', 'nama' => 'Ni Ketut Sukasih, SE.,MM', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196411291993032001', 'nama' => 'Dra. Ni Ketut Masih.,MM', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196401211993031001', 'nama' => 'Drs. Ec. I Wayan Karman,M.Acc., Ak', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196804131993031002', 'nama' => 'I Made Ariana,SE.,M.Si, Ak', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '197101201994122002', 'nama' => 'Luh Nyoman Chandra Handayani, SS,DEA', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '197201311995122001', 'nama' => 'Jeni Susanti, SE, M.Agb', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '197209081998021001', 'nama' => 'I Ketut Parnata, SE,M.M.A., AK', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '197309252002122001', 'nama' => 'Desak Putu Suciwati, SE.M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '197801192002121001', 'nama' => 'I Ketut Suwintana, S.Kom., MT', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '197611082002122001', 'nama' => 'I.Gst.Agung Oka Sudiadnyani, SE.,M.Si..Ak.', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '197909112003121002', 'nama' => 'I Made Dwijendra Sulastra, S.Kom. M.T', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '197512312005011003', 'nama' => 'I Made Bagiada, SE.,M.Si., Ak', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '197709142005011002', 'nama' => 'Dr. I Nyoman Darmayasa, SE., M.Ak., Ak., MM.', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '197704172005011002', 'nama' => 'Ketut Arya Bayu Wicaksana, SE.,M.Si.,Ak', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '198101152006042002', 'nama' => 'Ni Made Wirasyanti Dwi Pratiwi, SE,M.Agb.,Ak', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '198209252008012010', 'nama' => 'Ni Wayan Kurnia Dewi, SE.,M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '197808292008011007', 'nama' => 'I Made Agus Putrayasa, SE, M. SA.,Ak', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '196809131993032002', 'nama' => 'Prof. Dr. Dra. Ni Nyoman Aryaningsih, MM', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '197603242009121001', 'nama' => 'I Made Dana Saputra, SE., M.Ak., Ak.', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '198906222014042001', 'nama' => 'Ni Wayan Dewinta Ayuni.S.Si.,M.Si.', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '198601102014041001', 'nama' => 'Putu Adi Suprapto. S.H.,LL.M', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '198511052014041001', 'nama' => 'Wayan Hesadijaya Utthavi.S.E.,M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '198903082015042005', 'nama' => 'I Gusti Ayu Astri Pramitari.SE.,M.Ak.,Ak', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '198709282015042003', 'nama' => 'Ketut Nurhayanti.S.Pd.H.,M.Pd.H', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '199011272018032001', 'nama' => 'Ni Luh Putu Norma Dewi Abdi Pradnyani, M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '199007222019032012', 'nama' => 'Kadek Nita Sumiari, S.S.T., M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '199212272019032027', 'nama' => 'Wayan Tari Indra Putri S.S.T.,Ak.,M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '197610071996021001', 'nama' => 'I Wayan Karmana, SE.MM', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '197902242006042002', 'nama' => 'Ni Made Ayu Dwijayanti, SE., Ak., M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '199103172020122002', 'nama' => 'Wayan Eny Mariani, S.M.B., M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '199109102020122004', 'nama' => 'Ni Nengah Lasmini, S.S.T., Ak., M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '202111003', 'nama' => 'Ni Made Mega Abdi Utami, S.Tr.Akt., M.Ak', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '199609032022031013', 'nama' => 'I Made Adhi Wirayana, SE., M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '199506212022032017', 'nama' => 'Ni Luh Putri Setyastrini, SE., M.Ak', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '202111002', 'nama' => 'Kadek Dian Jatiwardani, S.S.T. Ak., M.Si', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '199510112022032015', 'nama' => 'Ni Komang Urip Krisna Dewi, SE., M.Acc', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '199012182022031005', 'nama' => 'Nyoman Angga Pradipa, SE., M.Si., Ak., CA', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '198906192022032001', 'nama' => 'Ketut Sinta Trisnadewi, SE., M.Sc', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '202111001', 'nama' => 'Putu Rany Wedasuari, SE., M.Si., Ak.', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '198912212023211014', 'nama' => 'Made Andy Pradana Sukarta, S.S.T., M.Si.', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '19930128202311015', 'nama' => ' I Made Dama Sucipta, S.Pd.,M.Pd', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()],
            ['nidn' => '195612311994031002', 'nama' => 'Dr. I Ketut Wenten Aryawan, SH.,MH', 'email' => '', 'password' => '$2y$10$E5k5vukItb8ME1msKKc3bOeC/U7OJ/5B7CEPbVrrEDvTRV6tT2xkC', 'created_at' => now(), 'updated_at' => now()]
        ];
        foreach ($dosens as $dosen) {
            DB::table('dosens')->updateOrInsert(
                ['nidn' => $dosen['nidn']],
                [
                    'nama' => $dosen['nama'],
                    'email' => '',
                    'password' => Hash::make('12345678'),
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );
        }
    }
}
