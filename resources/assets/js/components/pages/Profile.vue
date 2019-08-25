
<template>
  <v-content>
    <vue-headful v-bind:title="`Rules`"></vue-headful>
    <v-container fluid fill-height md8 sm12>
      <v-layout justify-center align-center>
        <v-flex align-center justify-center layout xs12 class="lebar">
          <v-card>
            <v-layout style="margin: 0px 25px 25px 25px;">
              <v-card-title primary-title>
                <div v-html="post.content"></div>
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
      post: {
        title: "",
        content: `<h1 style="text-align: center"><strong>TATA TERTIB PESERTA RANGKAIAN 1<br /> IF ELSE 2019</strong></h1>
<ol type="1">
    <li>Mematuhi peraturan dan tata tertib IF ELSE 2019.</li>
    <li>Membawa barang yang sesuai dengan ketentuan.</li>
    <li>Peserta wajib mengikuti seluruh rangkaian IF-ELSE 2019 secara aktif.</li>
    <li>Open gate dimulai pukul 07.00 &ndash; 07.45 WIB</li>
    <li>Wajib menerapkan 5S+1N terhadap sesama peserta dan panitia.</li>
    <li>Memakai nametag fakultas.</li>
    <li>Ketentuan penampilan peserta:</li>
</ol>
<ol>
    <ol type="a">
        <li>Putra :</li>
        <ol type="i">
            <li>Rambut tidak dicat warna dan disisir rapi.</li>
            <li>Memakai kemeja putih polos lengan panjang (dasi hitam panjang)</li>
            <li>Memakai celana panjang kain berwarna hitam tidak ketat</li>
            <li>Menggunakan pita berwarna biru (ukuran lebar 1 cm) di lengan kanan, simpul kupu-kupu</li>
            <li>Ikat pinggang warna hitam gesper standar</li>
            <li>Kaos kaki berwarna putih di atas mata kaki</li>
            <li>Memakai sepatu pantofel berwarna hitam.</li>
            <li>Pita (diikat di lengan kiri) :</li>
            <ol>
                <li>Kuning : Penyakit ringan</li>
                <li>Hitam : Penyakit berat/kronis</li>
            </ol>
        </ol>

        <li>Putri :</li>
        <ol type="i">
            <li>Bagi yang menggunakan kerudung, kerudung segi 4 berwarna hitam, model biasa.</li>
            <li>Bagi yang tidak menggunakan kerudung, rambut dikuncir satu rapi.</li>
            <li>Rambut tidak dicat warna dan disisir rapi.</li>
            <li>Memakai kemeja putih polos lengan panjang (dasi hitam panjang)</li>
            <li>Memakai rok panjang kain berwarna hitam tidak ketat</li>
            <li>Menggunakan pita berwarna biru (ukuran lebar 1 cm) di lengan kanan, simpul kupu-kupu</li>
            <li>Ikat pinggang warna hitam gesper standar</li>
            <li>Kaos kaki berwarna putih di atas mata kaki</li>
            <li>Memakai sepatu pantofel berwarna hitam.</li>
            <li>Pita (diikat di lengan kiri) :</li>
            <ol>
                <li>Merah : Haid</li>
                <li>Kuning : Penyakit ringan</li>
                <li>Hitam : Penyakit berat/kronis</li>
            </ol>
        </ol>
    </ol>
</ol>
<ol start="8">
    <li>Dianjurkan sarapan terlebih dahulu.</li>
    <li>Peserta dilarang untuk :</li>
</ol>
<ol >
    <ol type="a">
        <li>Membawa barang-barang berharga.</li>
        <li>Menggunakan jam tangan.</li>
        <li>Membawa senjata tajam, senjata api, rokok, vape, narkotika, dan minuman beralkohol.</li>
        <li>Membawa dan memakai make up, aksesoris atau perhiasan.</li>
        <li>Menggunakan HP saat kegiatan sedang berlangsung (kecuali ada instruksi dari panitia).</li>
        <li>Berbuat keonaran.</li>
        <li>Membawa kendaraan bermotor ke dalam wilayah Universitas Brawijaya.</li>
        <li>Meninggalkan kegiatan yang sedang berlangsung tanpa seizin panitia.</li>
    </ol>
</ol>
<ol start="10">
    <li>Wajib membawa :</li>
</ol>
<ol>
    <ol type="a">
        <li>Tas ransel berwarna hitam</li>
        <li>Buku dan alat tulis</li>
        <li>Buku saku</li>
        <li>1 roti sobek dan susu 250 ml</li>
        <li>Air mineral 600 ml</li>
        <li>Jas hujan</li>
        <li>Obat &ndash; obatan pribadi</li>
    </ol>
</ol>
<ol start="11">
    <li>Barang bawaan pribadi menjadi tanggung jawab masing-masing (panitia tidak bertanggung jawab atas kehilangan barang pribadi).</li>
    <li>Peserta yang berhalangan hadir, wajib menyerahkan keterangan disertai bukti maksimal H+3 setelah rangkaian.</li>
</ol>
<br>
<p>Keterangan:</p>
<ol>
    <li>Peserta merupakan seluruh mahasiswa baru Program Studi Teknik Informatika Fakultas Ilmu Komputer Universitas Brawijaya angkatan 2019.</li>
    <li>Foto gesper standar</li>
</ol>`,

        tgl: "",
        link: "",
        img: "",
        carousels: [
          {
            img: ""
          }
        ]
      },
      appUrl: this.$appUrl,
      loading: true
    };
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