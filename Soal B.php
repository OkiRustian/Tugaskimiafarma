<?php 

// Fungsi untuk mencari keuntungan maksimal yang dapat diperoleh dengan membeli dan menjual saham pada waktu yang tepat.
// Fungsi ini menerima sebuah array berisi harga saham.
function StockPicker($arr) {
  // Inisialisasi variabel $maxProfit dengan nilai -1, menandakan bahwa belum ditemukan keuntungan.
  $maxProfit = -1;
  
  // Hitung jumlah elemen dalam array input dan simpan dalam variabel $n.
  $n = count($arr);

  // Loop melalui setiap elemen array menggunakan nested loop untuk membandingkan setiap pasangan elemen.
  for ($i = 0; $i < $n - 1; $i++) {
    for ($j = $i + 1; $j < $n; $j++) {
      // Hitung keuntungan dengan mengurangkan harga saham pada indeks $i dari harga saham pada indeks $j.
      $profit = $arr[$j] - $arr[$i];

      // Jika keuntungan yang dihitung lebih besar dari $maxProfit saat ini, perbarui $maxProfit dengan nilai baru.
      if ($profit > $maxProfit) {
        $maxProfit = $profit;
      }
    }
  }

  // Kembalikan nilai keuntungan maksimal yang dapat diperoleh dengan harga saham yang diberikan.
  // Jika tidak ada keuntungan yang mungkin, nilai -1 akan dikembalikan (karena $maxProfit diinisialisasi dengan -1 dan tidak pernah diubah).
  return $maxProfit;
}

// Contoh pengujian
echo StockPicker([44, 30, 24, 32, 35, 30, 40, 38, 15]); // Output: 16
echo StockPicker([10, 9, 8, 2]); // Output: -1
echo StockPicker([10, 12, 4, 5, 9]); // Output: 5
echo StockPicker([14, 20, 4, 12, 5, 11]); // Output: 8

//output yang keluar=16-158


?>