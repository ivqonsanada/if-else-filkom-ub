
<template>
  <v-content>
    <vue-headful v-bind:title="`Rules`"></vue-headful>
    <v-container fluid fill-height>
      <v-layout justify-center align-center>
        <v-flex align-center justify-center layout xs12 class="lebar" wrap>
          <v-card v-for="user in users" :key="nim" class="ma-3">
            <v-layout style="margin: 0px 25px 25px 25px;">
              <v-card-title primary-title>
                <!-- <v-btn @click="register"></v-btn> -->
                {{ user.name }} <br>
                {{ user.password }}
              </v-card-title>
            </v-layout>
          </v-card>
        </v-flex>
      </v-layout>
    </v-container>
  </v-content>
</template>
       <script>
export default {
  data() {
    return {
      users: [
  {
    nim: 195150219111001,
    name: 'Duwi Purnama Sidik',
    password: '4k2pHU',
    c_password: '4k2pHU'
  },
  {
    nim: 195150200111047,
    name: 'Resnu Wahyu Adaby',
    password: 'GFa4D6',
    c_password: 'GFa4D6'
  },
  {
    nim: 195150207111064,
    name: 'Andi Muhammad Rafly',
    password: 'Sl9NmY',
    c_password: 'Sl9NmY'
  },
  {
    nim: 195150201111040,
    name: 'Muhammad Adib Novan Fanani',
    password: 'VS3hX5',
    c_password: 'VS3hX5'
  },
  {
    nim: 195150200111024,
    name: 'Aulia Megha Ramadhani',
    password: 'S5flcF',
    c_password: 'S5flcF'
  },
  {
    nim: 195150201111019,
    name: 'Tubagus Saifulloh',
    password: '6GdKMj',
    c_password: '6GdKMj'
  },
  {
    nim: 195150207111068,
    name: 'BAGAS AULIA SURYAWITONO',
    password: 'Pai3Nw',
    c_password: 'Pai3Nw'
  },
  {
    nim: 195150201111007,
    name: 'Ari Syuhada',
    password: '9b6FkO',
    c_password: '9b6FkO'
  },
  {
    nim: 195150201111071,
    name: 'Catur Okta Rivandi Firmansyah',
    password: 'IDM38Q',
    c_password: 'IDM38Q'
  },
  {
    nim: 195150201111012,
    name: 'Maya Eky Antoko Putri',
    password: '85cmAK',
    c_password: '85cmAK'
  },
  {
    nim: 195150201111022,
    name: 'Zildan Isrezki Nurahman Hernawan',
    password: '4Uo0XG',
    c_password: '4Uo0XG'
  },
  {
    nim: 195150219111003,
    name: 'Mahqomam Mahmuda',
    password: 'qO3BAl',
    c_password: 'qO3BAl'
  },
  {
    nim: 195150200111042,
    name: 'Muhammad Hafidh Ilmi Nafi\'an',
    password: '2AVr0N',
    c_password: '2AVr0N'
  },
  {
    nim: 195150201111069,
    name: 'Muhammad Guntur Alfarakh',
    password: '3yKHPO',
    c_password: '3yKHPO'
  },
  {
    nim: 195150201111032,
    name: 'Dimas Agung Gumelar',
    password: 'dJc1Be',
    c_password: 'dJc1Be'
  },
  {
    nim: 195150200111045,
    name: 'Erland Hilman Fuadi',
    password: '7qlNNf',
    c_password: '7qlNNf'
  },
  {
    nim: 195150207111008,
    name: 'Elsa Chintia Agriani',
    password: '5Ru8UB',
    c_password: '5Ru8UB'
  },
  {
    nim: 195150200111012,
    name: 'Budi Iswanto',
    password: 'mDHEJ1',
    c_password: 'mDHEJ1'
  },
  {
    nim: 195150201111054,
    name: 'Muhammad Farras Sakti Pratama',
    password: 'jA9oq1',
    c_password: 'jA9oq1'
  },
  {
    nim: 195150201111010,
    name: 'Muhammad Fikri Mustofa Azhari',
    password: '1zTuD9',
    c_password: '1zTuD9'
  },
  {
    nim: 195150200111007,
    name: 'Saihan Nabawi',
    password: '0MlrOO',
    c_password: '0MlrOO'
  },
  {
    nim: 195150201111029,
    name: 'Tria Elvafizani',
    password: 'qFLa2w',
    c_password: 'qFLa2w'
  },
  {
    nim: 195150200111070,
    name: 'Christ Michael Doha Siregar',
    password: '3HXYBr',
    c_password: '3HXYBr'
  },
  {
    nim: 195150200111085,
    name: 'Muhammad Furqony Sabililhaq',
    password: 'kDNN8C',
    c_password: 'kDNN8C'
  },
  {
    nim: 195150200111059,
    name: 'Khadija Rahmanisa Putri Pohan',
    password: 'RfO25z',
    c_password: 'RfO25z'
  },
  {
    nim: 195150200111082,
    name: 'Muhammad Yusuf Ahmadi',
    password: 'Z2d73R',
    c_password: 'Z2d73R'
  },
  {
    nim: 195150200111022,
    name: 'Eko Prasetyo',
    password: 'Yu1U3l',
    c_password: 'Yu1U3l'
  },
  {
    nim: 195150219111002,
    name: 'Oktaviani Dwi Nur Aini',
    password: '71WWPv',
    c_password: '71WWPv'
  },
  {
    nim: 195150200111014,
    name: 'Ali Akbar',
    password: 'ATFU5j',
    c_password: 'ATFU5j'
  },
  {
    nim: 195150201111002,
    name: 'Anggasta Aji Azhari',
    password: 'DF9L5d',
    c_password: 'DF9L5d'
  },
  {
    nim: 195150201111061,
    name: 'Agung Syahputra',
    password: 'KXVe6d',
    c_password: 'KXVe6d'
  },
  {
    nim: 195150207111026,
    name: 'Fitra Bagus Arviyanto',
    password: 'q43QwZ',
    c_password: 'q43QwZ'
  },
  {
    nim: 195150201111063,
    name: 'Siti Vildzatul Imamah',
    password: 'R4niiB',
    c_password: 'R4niiB'
  },
  {
    nim: 195150200111034,
    name: 'Shafa Al Afghany Al Rahman',
    password: 'eRO7eK',
    c_password: 'eRO7eK'
  },
  {
    nim: 195150201111009,
    name: 'Andika Irza Pradana',
    password: '31IJRV',
    c_password: '31IJRV'
  },
  {
    nim: 195150207111023,
    name: 'Putri Amanda Syafira',
    password: 'b2NCbP',
    c_password: 'b2NCbP'
  },
  {
    nim: 195150000000000,
    name: 'Lutfi Mitra Tanjung',
    password: 'e8XtB4',
    c_password: 'e8XtB4'
  },
  {
    nim: 195150201111044,
    name: 'Nur Wahyu Melliano Hariyanto',
    password: 'YnKB38',
    c_password: 'YnKB38'
  },
  {
    nim: 195150200111037,
    name: 'Azzara Aji Syahputri',
    password: 'XVKxe2',
    c_password: 'XVKxe2'
  },
  {
    nim: 195150200111049,
    name: 'Rafly Firzatullah Sultan Wibowo',
    password: 'IhO34q',
    c_password: 'IhO34q'
  },
  {
    nim: 195150201111070,
    name: 'Muhammad Fachry Noorchoolish Arif',
    password: 'nvlIM8',
    c_password: 'nvlIM8'
  },
  {
    nim: 195150201111041,
    name: 'Syahida Usama Firdaus',
    password: 'MoDe8r',
    c_password: 'MoDe8r'
  },
  {
    nim: 195150200111016,
    name: 'Mutiharis Dauber Panjaitan',
    password: 'tPd1Iy',
    c_password: 'tPd1Iy'
  },
  {
    nim: 195150200111065,
    name: 'Tsany Rijalu Ahimsa',
    password: '0D4uWR',
    c_password: '0D4uWR'
  },
  {
    nim: 195150201111031,
    name: 'Muhamad Harun Zein',
    password: 'C8jAGD',
    c_password: 'C8jAGD'
  },
  {
    nim: 195150201111047,
    name: 'M. Nugraha Delta Revanza',
    password: '4dZhHG',
    c_password: '4dZhHG'
  },
  {
    nim: 195150201111021,
    name: 'Silvy Zafira Putri',
    password: 'UtVS08',
    c_password: 'UtVS08'
  },
  {
    nim: 195150200111026,
    name: 'Muhammad Ihsan Saiful Kirom',
    password: 'F0FEi8',
    c_password: 'F0FEi8'
  },
  {
    nim: 195150201111006,
    name: 'Alfonsus Avianto Chandrawan',
    password: '05KGAu',
    c_password: '05KGAu'
  },
  {
    nim: 195150200111083,
    name: 'Muhammad Firmansyah Putra',
    password: '1JsKwa',
    c_password: '1JsKwa'
  },
  {
    nim: 195150200111076,
    name: 'Fauzan Ramadhanto Andiko Putra',
    password: 'WOAbd0',
    c_password: 'WOAbd0'
  },
  {
    nim: 195150200111044,
    name: 'Reza Akbar Attariq',
    password: 'F1MAdN',
    c_password: 'F1MAdN'
  },
  {
    nim: 195150200111048,
    name: 'Yogi Prasetyo',
    password: 'Bd1s76',
    c_password: 'Bd1s76'
  },
  {
    nim: 195150201111028,
    name: 'Abi Aryaza',
    password: 'XYcL5U',
    c_password: 'XYcL5U'
  },
  {
    nim: 195150200111005,
    name: 'Zidane El Faruqi',
    password: 'Mv7Xqg',
    c_password: 'Mv7Xqg'
  },
  {
    nim: 195150207111009,
    name: 'FARHAN RIZQI PRADITYA',
    password: '6ORTnJ',
    c_password: '6ORTnJ'
  },
  {
    nim: 195150207111034,
    name: 'Antonius Kevin Ardho',
    password: 'DY81kO',
    c_password: 'DY81kO'
  },
  {
    nim: 195150200111036,
    name: 'Muhammad Haykal Rafli',
    password: 'NBC2FR',
    c_password: 'NBC2FR'
  },
  {
    nim: 195150207111061,
    name: 'FATHUR ARIANSHA',
    password: 'M7re5n',
    c_password: 'M7re5n'
  },
  {
    nim: 195150207111058,
    name: 'Shandy Arga Vindra',
    password: 'URmD6n',
    c_password: 'URmD6n'
  },
  {
    nim: 195150201111011,
    name: 'Lenny Raufi Syafitri',
    password: 'pA6j0q',
    c_password: 'pA6j0q'
  },
  {
    nim: 195150207111048,
    name: 'Restra Arya Suwardoyo',
    password: 'Tc9145',
    c_password: 'Tc9145'
  },
  {
    nim: 195150201111025,
    name: 'Andres Kurnia Adry',
    password: 'C4awLU',
    c_password: 'C4awLU'
  },
  {
    nim: 195150201111034,
    name: 'Aldi Fianda Putra',
    password: 'R7HC8T',
    c_password: 'R7HC8T'
  },
  {
    nim: 195150207111057,
    name: 'Fahrulloh Hasbi',
    password: 'x15dV8',
    c_password: 'x15dV8'
  },
  {
    nim: 195150201111045,
    name: 'Arlinno Ganda Saputra',
    password: 'WK78Jd',
    c_password: 'WK78Jd'
  },
  {
    nim: 195150200111025,
    name: 'Cantika Shinta Aristiani',
    password: 'eR61rA',
    c_password: 'eR61rA'
  },
  {
    nim: 195150207111074,
    name: 'M. IRVAN HANANTO BAYUAJI',
    password: 'fv2Yi6',
    c_password: 'fv2Yi6'
  },
  {
    nim: 195150200111073,
    name: 'Andriko Fajar Prakoso',
    password: 'axMUb6',
    c_password: 'axMUb6'
  },
  {
    nim: 195150200111068,
    name: 'Kartika Sari',
    password: 'XN0k62',
    c_password: 'XN0k62'
  },
  {
    nim: 195150207111018,
    name: 'MUHAMMAD ABDILLAH RAHMANSYAH',
    password: 'M4CICD',
    c_password: 'M4CICD'
  },
  {
    nim: 195150200111084,
    name: 'Abillio Attalarik Syech',
    password: 'VwVt50',
    c_password: 'VwVt50'
  },
  {
    nim: 195150200111033,
    name: 'Ikhwan Maulana Akbar',
    password: 'zjb5Gk',
    c_password: 'zjb5Gk'
  },
  {
    nim: 195150207111073,
    name: 'MUHAMMAD ALI NAUFAL MULYADI',
    password: 'Do5F6O',
    c_password: 'Do5F6O'
  },
  {
    nim: 195150201111060,
    name: 'Herdian Bintang Mahendra',
    password: 'sSx9SG',
    c_password: 'sSx9SG'
  },
  {
    nim: 195150207111042,
    name: 'Muhammad Ranuaji',
    password: 'HqDL6o',
    c_password: 'HqDL6o'
  },
  {
    nim: 195150201111020,
    name: 'Erika Khoirunisa',
    password: 'nLd98N',
    c_password: 'nLd98N'
  },
  {
    nim: 195150207111065,
    name: 'MUHAMMAD HAIKAL FISABILILLAH',
    password: 'hIv15W',
    c_password: 'hIv15W'
  },
  {
    nim: 195150207111054,
    name: 'Andrian Rafli Rahman Atdy',
    password: '6DOq6F',
    c_password: '6DOq6F'
  },
  {
    nim: 195150200111035,
    name: 'Muhammad Faishal Kemal Jauhar Arifin',
    password: 'Ok7TyT',
    c_password: 'Ok7TyT'
  },
  {
    nim: 195150200111066,
    name: 'Muhammad Bintang Prabowo',
    password: 'LD9I4D',
    c_password: 'LD9I4D'
  },
  {
    nim: 195150207111072,
    name: 'Muhammad Rafi Adi Wibowo',
    password: 'Lp3LGT',
    c_password: 'Lp3LGT'
  },
  {
    nim: 195150201111003,
    name: 'Zeta Zidanne Bihesa',
    password: 'M9SGlO',
    c_password: 'M9SGlO'
  },
  {
    nim: 195150207111012,
    name: 'Ivanna Adista Sihombing',
    password: 'W2dHw6',
    c_password: 'W2dHw6'
  },
  {
    nim: 195150207111075,
    name: 'Nadia Salsabila Nugraha',
    password: 'aiaRO1',
    c_password: 'aiaRO1'
  },
  {
    nim: 195150200111052,
    name: 'Daffa Daniswara Kodrihan',
    password: 'U4y9OV',
    c_password: 'U4y9OV'
  },
  {
    nim: 195150207111036,
    name: 'Noverio Athariq Syafaz',
    password: 'PI8bgb',
    c_password: 'PI8bgb'
  },
  {
    nim: 195150201111008,
    name: 'Alien Via Surya Budi',
    password: 'DSB5fk',
    c_password: 'DSB5fk'
  },
  {
    nim: 195150207111067,
    name: 'PUTU WAHYU KUSUMA WARDHANA',
    password: 'rYVQ3H',
    c_password: 'rYVQ3H'
  },
  {
    nim: 195150207111007,
    name: 'Muhammad Azwar Kemal Abdillah',
    password: 'XKsVy7',
    c_password: 'XKsVy7'
  },
  {
    nim: 195150200111054,
    name: 'Marsa Aqil Darmawan',
    password: 'J6VwW0',
    c_password: 'J6VwW0'
  },
  {
    nim: 195150201111059,
    name: 'Rahmah Nur Diana',
    password: 'fV5KI0',
    c_password: 'fV5KI0'
  },
  {
    nim: 195150207111062,
    name: 'RIZA SETIAWAN SOETEDJO',
    password: 'qV9Bus',
    c_password: 'qV9Bus'
  },
  {
    nim: 195150200111053,
    name: 'Daffario Alexandra Agung Pradana',
    password: '38HAVd',
    c_password: '38HAVd'
  },
  {
    nim: 195150201111062,
    name: 'Dyah Ayu Wulandari',
    password: '9IlwuY',
    c_password: '9IlwuY'
  },
  {
    nim: 195150207111029,
    name: 'SAFIR RAHMAHUDA MACHSUN',
    password: 'YE40Ee',
    c_password: 'YE40Ee'
  },
  {
    nim: 195150200111030,
    name: 'Krisnanda Ahadian',
    password: 'm1I5O3',
    c_password: 'm1I5O3'
  },
  {
    nim: 195150201111056,
    name: 'Faiz Aulia Al Farisi',
    password: 'u1E21H',
    c_password: 'u1E21H'
  },
  {
    nim: 195150200111004,
    name: 'Ikbal Waludi',
    password: 'z8KSlo',
    c_password: 'z8KSlo'
  },
  {
    nim: 195150207111040,
    name: 'Muhammad Farid Muzayyani',
    password: 'DiqN9t',
    c_password: 'DiqN9t'
  },
  {
    nim: 195150200111009,
    name: 'STEVEN YOHANES',
    password: 'D5pWmS',
    c_password: 'D5pWmS'
  },
  {
    nim: 195150200111013,
    name: 'Gilbert Samuel Nicholas Silaban',
    password: 'IdA0Fm',
    c_password: 'IdA0Fm'
  },
  {
    nim: 195150200111006,
    name: 'Iwang Aryasatya Pratama',
    password: 'BpWk0W',
    c_password: 'BpWk0W'
  },
  {
    nim: 195150207111013,
    name: 'Nisrina Masfufah Amalia Rosidah',
    password: 'NqH2rU',
    c_password: 'NqH2rU'
  },
  {
    nim: 195150201111036,
    name: 'Alfian Budi Setiyawan',
    password: 'PWVD2Y',
    c_password: 'PWVD2Y'
  },
  {
    nim: 195150201111067,
    name: 'Dimas Nauval Ar Razid',
    password: 'HT4Hr0',
    c_password: 'HT4Hr0'
  },
  {
    nim: 195150201111038,
    name: 'Chindy Aulia Sari',
    password: 'naS79z',
    c_password: 'naS79z'
  },
  {
    nim: 195150201111027,
    name: 'Alwan Fauzi',
    password: 'yxP9Pw',
    c_password: 'yxP9Pw'
  },
  {
    nim: 195150201111042,
    name: 'Muhammad Fadhli Alpharajasa',
    password: 'mKwd72',
    c_password: 'mKwd72'
  },
  {
    nim: 195150207111002,
    name: 'Rimul Azilah',
    password: 'y77sGd',
    c_password: 'y77sGd'
  },
  {
    nim: 195150200111011,
    name: 'Muhammad Ishtobir Fuady',
    password: 'Cwp8FW',
    c_password: 'Cwp8FW'
  },
  {
    nim: 195150200111072,
    name: 'Jhon Michael Manik',
    password: 'eWkk9E',
    c_password: 'eWkk9E'
  },
  {
    nim: 195150220111002,
    name: 'Alistya Fikri Pratondo',
    password: 'bH9XUK',
    c_password: 'bH9XUK'
  },
  {
    nim: 195150200111077,
    name: 'Gustian Aditama',
    password: '94f2WP',
    c_password: '94f2WP'
  },
  {
    nim: 195150201111049,
    name: 'Cindy Prastika Amara Putri',
    password: '6NpE1H',
    c_password: '6NpE1H'
  },
  {
    nim: 195150201111048,
    name: 'Rayhan Adhika',
    password: '85rfyU',
    c_password: '85rfyU'
  },
  {
    nim: 195150200111060,
    name: 'Muhammad Ivan Wiryawan',
    password: 'opu3XS',
    c_password: 'opu3XS'
  },
  {
    nim: 195150201111024,
    name: 'Ahmad Kholish Fauzan Shobiry',
    password: 'uM3JYc',
    c_password: 'uM3JYc'
  },
  {
    nim: 195150200111058,
    name: 'Muhammad Rahmanda Baktiar',
    password: 'QVkI89',
    c_password: 'QVkI89'
  },
  {
    nim: 195150207111066,
    name: 'Anargya Hassya Budidarwanto',
    password: '9dNDsD',
    c_password: '9dNDsD'
  },
  {
    nim: 195150201111018,
    name: 'Muhammad Rifqi Fauzi',
    password: 'I0zkUC',
    c_password: 'I0zkUC'
  },
  {
    nim: 195150201111052,
    name: 'Rafeilia Safa Nurul Izza',
    password: '1MNpdK',
    c_password: '1MNpdK'
  },
  {
    nim: 195150207111027,
    name: 'HISYAM MAHAWIRA',
    password: 'Wd3pYf',
    c_password: 'Wd3pYf'
  },
  {
    nim: 195150201111026,
    name: 'Irfan Ardiyansyah',
    password: 'E0638h',
    c_password: 'E0638h'
  },
  {
    nim: 195150200111031,
    name: 'Muhammad Rosyid Aminuddin',
    password: '2JTW6X',
    c_password: '2JTW6X'
  },
  {
    nim: 195150201111057,
    name: 'Irsa Ainun Nisa Sofia Nur Rohma Faiza',
    password: 'eK2kmZ',
    c_password: 'eK2kmZ'
  },
  {
    nim: 195150201111015,
    name: 'George Alexander Suwito',
    password: '9M5QDI',
    c_password: '9M5QDI'
  },
  {
    nim: 195150200111021,
    name: 'Johan Adi Pradana',
    password: 'XXBh0M',
    c_password: 'XXBh0M'
  },
  {
    nim: 195150207111016,
    name: 'Hendrawan Anantha Putra',
    password: '0UDo4U',
    c_password: '0UDo4U'
  },
  {
    nim: 195150207111035,
    name: 'Salma Lathifah',
    password: 'lCkF5a',
    c_password: 'lCkF5a'
  },
  {
    nim: 195150200111002,
    name: 'Aristo Renaldo Ruslim',
    password: '709jVL',
    c_password: '709jVL'
  },
  {
    nim: 195150200111039,
    name: 'Riski Darmawan',
    password: 'Ddk8W6',
    c_password: 'Ddk8W6'
  },
  {
    nim: 195150200111008,
    name: 'Muhammad Alfatoni',
    password: '9OD7l0',
    c_password: '9OD7l0'
  },
  {
    nim: 195150200111064,
    name: 'Salsabila Imania Achmad',
    password: 'm9fF7E',
    c_password: 'm9fF7E'
  },
  {
    nim: 195150207111069,
    name: 'ANANDA DHARMA WIJAYA',
    password: 'B61OVD',
    c_password: 'B61OVD'
  },
  {
    nim: 195150207111049,
    name: 'Erico Partogi Herlambang Margura Silitonga',
    password: 'OV0dh2',
    c_password: 'OV0dh2'
  },
  {
    nim: 195150201111058,
    name: 'Zahra Asma Annisa',
    password: '2yLP27',
    c_password: '2yLP27'
  },
  {
    nim: 195150200111041,
    name: 'Laili Fatqulia Rahma',
    password: '6pP1dT',
    c_password: '6pP1dT'
  },
  {
    nim: 195150200111086,
    name: 'Dominicus Christian Bagus Susanto',
    password: '2PC9pe',
    c_password: '2PC9pe'
  },
  {
    nim: 195150200111055,
    name: 'I Putu Reditya Permana Putra',
    password: 'QZWU6k',
    c_password: 'QZWU6k'
  },
  {
    nim: 195150200111029,
    name: 'Septia Andriani Pasaribu',
    password: 'uW0Q4g',
    c_password: 'uW0Q4g'
  },
  {
    nim: 195150200111056,
    name: 'Muhammad Fathur Rahman Khairul',
    password: 'OYZ6r1',
    c_password: 'OYZ6r1'
  },
  {
    nim: 195150200111028,
    name: 'Dimas Kurniawan Ramadhan',
    password: 'pDFo4I',
    c_password: 'pDFo4I'
  },
  {
    nim: 195150201111014,
    name: 'Krisna Pinasthika',
    password: '7ZdqPJ',
    c_password: '7ZdqPJ'
  },
  {
    nim: 195150201111004,
    name: 'Abdi Darsono',
    password: 'S23C1Q',
    c_password: 'S23C1Q'
  },
  {
    nim: 195150201111053,
    name: 'M. Daffa Rhesa Dewantoro',
    password: '19sxcD',
    c_password: '19sxcD'
  },
  {
    nim: 195150200111015,
    name: 'Rabiatul Auliah',
    password: 'yNIe9z',
    c_password: 'yNIe9z'
  },
  {
    nim: 195150207111004,
    name: 'Dennis Setiadi Prajoko',
    password: 'D77JRc',
    c_password: 'D77JRc'
  },
  {
    nim: 195150200111019,
    name: 'Yudhistira Hary Pratama',
    password: '1WF9P5',
    c_password: '1WF9P5'
  },
  {
    nim: 195150201111030,
    name: 'Tita Alfiana',
    password: '75agE1',
    c_password: '75agE1'
  },
  {
    nim: 195150207111021,
    name: 'Hafizh Daffa Septianto',
    password: 'SfyD0B',
    c_password: 'SfyD0B'
  },
  {
    nim: 195150207111005,
    name: 'Shidqi Gusti Pramanda',
    password: '2hBA8y',
    c_password: '2hBA8y'
  },
  {
    nim: 195150201111064,
    name: 'Yolanda Saputri',
    password: '1JYTAR',
    c_password: '1JYTAR'
  },
  {
    nim: 195150200111069,
    name: 'Nelson Mordehai Samosir',
    password: 'Wq8Zd7',
    c_password: 'Wq8Zd7'
  },
  {
    nim: 195150207111031,
    name: 'Annas Agung Cahyo Murti Utomo',
    password: 'Rj7gU3',
    c_password: 'Rj7gU3'
  },
  {
    nim: 195150201111023,
    name: 'Nuzulul Athaya',
    password: 'u99DPc',
    c_password: 'u99DPc'
  },
  {
    nim: 195150200111038,
    name: 'Ahmad Saifuddin',
    password: 'v2JY4Y',
    c_password: 'v2JY4Y'
  },
  {
    nim: 195150201111055,
    name: 'Nofath Zukhrufi Haideal',
    password: 'Omn2K4',
    c_password: 'Omn2K4'
  },
  {
    nim: 195150201111039,
    name: 'Annisa Sukmawati',
    password: 'bnPm1w',
    c_password: 'bnPm1w'
  },
  {
    nim: 195150201111001,
    name: 'M.hidayat',
    password: 'DRI9W0',
    c_password: 'DRI9W0'
  },
  {
    nim: 195150200111071,
    name: 'Muhammad Reza Saifuddin',
    password: '6XAaK0',
    c_password: '6XAaK0'
  },
  {
    nim: 195150200111001,
    name: 'Nata Nirwasita Rasendriya',
    password: 'T66vPJ',
    c_password: 'T66vPJ'
  },
  {
    nim: 195150200111087,
    name: 'Adam Satria Adidarma',
    password: 'W3lwBD',
    c_password: 'W3lwBD'
  },
  {
    nim: 195150201111066,
    name: 'Arkaditya Lanang Saputro',
    password: 'T4Md1J',
    c_password: 'T4Md1J'
  },
  {
    nim: 195150200111020,
    name: 'Yunus Bagus Prasetyo',
    password: 'AvyF8u',
    c_password: 'AvyF8u'
  },
  {
    nim: 195150207111019,
    name: 'Alexei Andrei Basiman',
    password: 'AjHoG1',
    c_password: 'AjHoG1'
  },
  {
    nim: 195150207111022,
    name: 'Zaidan Tifftazany Boediyono',
    password: 'OBE8jc',
    c_password: 'OBE8jc'
  },
  {
    nim: 195150200111027,
    name: 'Sephtania Putri Anggraini',
    password: '9ZAiVB',
    c_password: '9ZAiVB'
  },
  {
    nim: 195150207111060,
    name: 'Amanda Vania Audrey N.k.z',
    password: 'E7ZBF2',
    c_password: 'E7ZBF2'
  },
  {
    nim: 195150200111018,
    name: 'Michael Stephen Lui',
    password: 'B20Yp2',
    c_password: 'B20Yp2'
  },
  {
    nim: 195150200111067,
    name: 'Muhammad Ziyad Al Maududi',
    password: '9LuRTc',
    c_password: '9LuRTc'
  },
  {
    nim: 195150201111043,
    name: 'Nabila Adelia Yusuf',
    password: '6vbqPv',
    c_password: '6vbqPv'
  },
  {
    nim: 195150207111044,
    name: 'Muh Handri Kiswanto',
    password: 'WL0h63',
    c_password: 'WL0h63'
  },
  {
    nim: 195150207111025,
    name: 'Muhammad Imam Muzakki',
    password: 'mDi2ZH',
    c_password: 'mDi2ZH'
  },
  {
    nim: 195150207111014,
    name: 'Dimas Toriq Pratama Putra',
    password: 'oVaVD9',
    c_password: 'oVaVD9'
  },
  {
    nim: 195150201111072,
    name: 'Abdurrahim \'azmi',
    password: 'd4I1jC',
    c_password: 'd4I1jC'
  },
  {
    nim: 195150200111051,
    name: 'Shabira Widyadhari',
    password: 'Y5wALS',
    c_password: 'Y5wALS'
  },
  {
    nim: 195150200111081,
    name: 'Muhammad Shovian Hadi Al Baihaqi',
    password: 'Q5nuG4',
    c_password: 'Q5nuG4'
  },
  {
    nim: 195150207111070,
    name: 'VEBY ANGELIA ROPITA TURNIP',
    password: '3DbUG1',
    c_password: '3DbUG1'
  },
  {
    nim: 195150207111024,
    name: 'Arief Daffa Abdullah',
    password: 'z2Qi5h',
    c_password: 'z2Qi5h'
  },
  {
    nim: 195150207111006,
    name: 'Alif Ayodya',
    password: 'MPvH4z',
    c_password: 'MPvH4z'
  },
  {
    nim: 195150200111043,
    name: 'Muhammad Ibrahim Yogatama',
    password: 'xMHbt5',
    c_password: 'xMHbt5'
  },
  {
    nim: 195150201111068,
    name: 'Devina Dwi Pratiwi',
    password: 'P37s1d',
    c_password: 'P37s1d'
  },
  {
    nim: 195150200111010,
    name: 'Ahmad Ahdani Dzikron',
    password: 'RG83Yx',
    c_password: 'RG83Yx'
  },
  {
    nim: 195150200111062,
    name: 'Alif Iqbal Hazairin',
    password: 'tB7qNg',
    c_password: 'tB7qNg'
  },
  {
    nim: 195150207111017,
    name: 'Nur Laili Amalia',
    password: 'JS5H76',
    c_password: 'JS5H76'
  },
  {
    nim: 195150207111039,
    name: 'Hasyir Daffa Ibrahim',
    password: 'WUri0d',
    c_password: 'WUri0d'
  },
  {
    nim: 195150207111011,
    name: 'Naufal Rafi Athallah Ramadhan',
    password: '0SdYx3',
    c_password: '0SdYx3'
  },
  {
    nim: 195150207111003,
    name: 'Aji Muhammad Qoyum',
    password: 's30EDD',
    c_password: 's30EDD'
  },
  {
    nim: 195150207111032,
    name: 'Hanif Adam Al Abraar',
    password: 'kY9FV2',
    c_password: 'kY9FV2'
  },
  {
    nim: 195150207111010,
    name: 'Thareq Abel Ramadhan',
    password: '5wmctK',
    c_password: '5wmctK'
  },
  {
    nim: 195150207111063,
    name: 'MUHAMMAD HARIS KHOIRUL ANAM',
    password: '7LDlhR',
    c_password: '7LDlhR'
  },
  {
    nim: 195150201111005,
    name: 'M Abigail Ghazy',
    password: 'TEjR8g',
    c_password: 'TEjR8g'
  },
  {
    nim: 195150200111032,
    name: 'Dava Mohammad Hamka',
    password: '04NEaR',
    c_password: '04NEaR'
  },
  {
    nim: 195150207111071,
    name: 'ANDI NAUFAL FALAH MUHAMAD',
    password: 'aIBpH8',
    c_password: 'aIBpH8'
  },
  {
    nim: 195150207111046,
    name: 'Alvian Aldo Ongawijaya',
    password: 'UQ04RD',
    c_password: 'UQ04RD'
  },
  {
    nim: 195150200111075,
    name: 'Muhammad Salman Ikrar Musyaffa',
    password: 'dMer66',
    c_password: 'dMer66'
  },
  {
    nim: 195150200111003,
    name: 'Kautsarratu Athaya Zayyannarantis',
    password: '5a2iG0',
    c_password: '5a2iG0'
  },
  {
    nim: 195150200111050,
    name: 'Muhammad Reyhan Tito',
    password: '0wphK0',
    c_password: '0wphK0'
  },
  {
    nim: 195150200111080,
    name: 'Rizky Aditya Apriansyah',
    password: '8IpgPL',
    c_password: '8IpgPL'
  },
  {
    nim: 195150200111074,
    name: 'Mohammad Alfiano Rizky Mahardika',
    password: 'hvIP4c',
    c_password: 'hvIP4c'
  },
  {
    nim: 195150200111061,
    name: 'Muhammad Aldi Wiratama',
    password: 'hsK2hF',
    c_password: 'hsK2hF'
  },
  {
    nim: 195150201111037,
    name: 'Firda Adha Cahyanti',
    password: 'ScDs5C',
    c_password: 'ScDs5C'
  },
  {
    nim: 195150207111038,
    name: 'Nathanael Victor Darenoh',
    password: 'xztQ9R',
    c_password: 'xztQ9R'
  },
  {
    nim: 195150207111028,
    name: 'Muhammad Fajar Alfath',
    password: 'VyA86T',
    c_password: 'VyA86T'
  },
  {
    nim: 195150201111046,
    name: 'Dwi Satria Patra',
    password: 'gt9Up9',
    c_password: 'gt9Up9'
  },
  {
    nim: 195150201111051,
    name: 'Ridho Aqli Efendi',
    password: '6cEtjn',
    c_password: '6cEtjn'
  },
  {
    nim: 195150200111079,
    name: 'James Maranata Silaban',
    password: 'NGBDM6',
    c_password: 'NGBDM6'
  },
  {
    nim: 195150207111020,
    name: 'Jasmine Prigel Palupi Prasojo',
    password: '82GdBf',
    c_password: '82GdBf'
  },
  {
    nim: 195150207111047,
    name: 'Lalu Alfitra Kallatida Muhamad',
    password: '9DY5kG',
    c_password: '9DY5kG'
  },
  {
    nim: 195150207111033,
    name: 'Fellyx Andreas Shumacer',
    password: '48enjX',
    c_password: '48enjX'
  },
  {
    nim: 195150201111035,
    name: 'Amin Fadilah',
    password: 'AFHE1H',
    c_password: 'AFHE1H'
  },
  {
    nim: 195150200111017,
    name: 'Arif Wiranata',
    password: 'wMO0CN',
    c_password: 'wMO0CN'
  },
  {
    nim: 195150207111045,
    name: 'Anthony Aaron',
    password: 'a8woAQ',
    c_password: 'a8woAQ'
  },
  {
    nim: 195150207111015,
    name: 'Rafi Rasendriya Bimawan',
    password: 'kU83HA',
    c_password: 'kU83HA'
  },
  {
    nim: 195150207111050,
    name: 'Mahrus Shafa Salam',
    password: 'epm8W8',
    c_password: 'epm8W8'
  },
  {
    nim: 195150207111030,
    name: 'Jagad Nabil Tuah Imanda',
    password: 'HFu5F7',
    c_password: 'HFu5F7'
  },
  {
    nim: 195150200111078,
    name: 'Vrizas Izza Izzuddin',
    password: 'Sd82Rw',
    c_password: 'Sd82Rw'
  },
  {
    nim: 195150207111052,
    name: 'Farid Syauqi Nirwan',
    password: 'DcK7Ik',
    c_password: 'DcK7Ik'
  },
  {
    nim: 195150201111065,
    name: 'Kelvin Hendra Wijaya',
    password: '4I0YTb',
    c_password: '4I0YTb'
  },
  {
    nim: 195150207111051,
    name: 'Faiz Ahmad Sucipto',
    password: '37lQZc',
    c_password: '37lQZc'
  },
  {
    nim: 195150201111013,
    name: 'Munirotul Millah',
    password: 'Cd7R8q',
    c_password: 'Cd7R8q'
  },
  {
    nim: 195150200111057,
    name: 'I Putu Krisna Sedana',
    password: 'MG1Gmd',
    c_password: 'MG1Gmd'
  },
  {
    nim: 195150207111037,
    name: 'Aldo Friska Darma Putra',
    password: '9PHeC3',
    c_password: '9PHeC3'
  },
  {
    nim: 195150200111046,
    name: 'Joshua Felix Potalangi',
    password: 'ogLgK4',
    c_password: 'ogLgK4'
  },
  {
    nim: 195150201111033,
    name: 'Sinta Dwi Ayu Kumala',
    password: 'MN49QB',
    c_password: 'MN49QB'
  },
  {
    nim: 195150207111001,
    name: 'Endra Pratama',
    password: 'tDAsc5',
    c_password: 'tDAsc5'
  },
  {
    nim: 195150207111055,
    name: 'Istihsan Bismoputro',
    password: 'B6kxO4',
    c_password: 'B6kxO4'
  },
  {
    nim: 195150200111040,
    name: 'Fitrantika Diashafira',
    password: 'HZ0yuZ',
    c_password: 'HZ0yuZ'
  },
  {
    nim: 195150200111023,
    name: 'Reza Cakra Buana',
    password: '2Hj3LQ',
    c_password: '2Hj3LQ'
  },
  {
    nim: 195150201111017,
    name: 'Haris Fuad Abadi',
    password: 'wJLtq1',
    c_password: 'wJLtq1'
  },
  {
    nim: 195150207111041,
    name: 'Moch. Daffa Zakwan',
    password: 'iz5dP9',
    c_password: 'iz5dP9'
  },
  {
    nim: 195150207111053,
    name: 'Eurico Krisna Wijaya',
    password: 'i6PcJL',
    c_password: 'i6PcJL'
  },
  {
    nim: 195150201111016,
    name: 'Willyan Eka Ksatria',
    password: 'Vwy5WB',
    c_password: 'Vwy5WB'
  },
  {
    nim: 195150207111043,
    name: 'Stefanus Fabiano',
    password: 'lJ1LQR',
    c_password: 'lJ1LQR'
  },
  {
    nim: 195150207111059,
    name: 'Andika Rifqi Maulana',
    password: 'hHR9g5',
    c_password: 'hHR9g5'
  },
  {
    nim: 195150200111063,
    name: 'Kevin Alif Mahendra',
    password: 'V530Sp',
    c_password: 'V530Sp'
  },
  {
    nim: 195150207111056,
    name: 'Anshar Fariz Zulhilmi',
    password: '27k5HH',
    c_password: '27k5HH'
  },
  {
    nim: 195150201111050,
    name: 'Faris Akbar Ismiawafi',
    password: 'hFfb1A',
    c_password: 'hFfb1A'
  }
]
    };
  },
  methods: {
    register() {
      this.users.forEach(user => {
        
      // console.log(user.nim)
      let config = {};
    let bodyParameters = {
      nim: user.nim,
      name: user.name,
      password: user.password,
      c_password: user.c_password
    };

// console.log(bodyParameters.name)

    axios.post(`${this.$appUrl}/api/register`, bodyParameters, config)
      });
    }
  }
};
</script>

<style>
h1 {
  font-size: 1.2rem;
}
p {
  font-size: 1rem;
}

.v-card__title {
  font-size: 1rem;
  line-height: 1.5;
}

@media (min-width: 600px) {
  .lebar {
    flex-basis: 61% !important;
    flex-grow: 0;
    max-width: 61% !important;
  }
  h1 {
    font-size: 1.8rem;
  }
}

@media (min-width: 800px) {
  .lebar {
    flex-basis: 41% !important;
    flex-grow: 0;
    max-width: 41% !important;
  }
}
</style>