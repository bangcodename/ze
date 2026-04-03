<?php
include 'config.php';
header('Content-Type: application/json');

// Mengambil Statistik (SESSION 1)
try {
    // Query asli untuk database db_zeff_26
    // Jika tabel belum ada, kita berikan data dummy agar dashboard tidak kosong
    $stats = [
        'suratMasuk' => 0,
        'suratKeluar' => 0,
        'agendaHariIni' => 0,
        'lastUpdate' => date('d/m/Y H:i:s')
    ];

    // Contoh pengambilan data asli:
    // $stmt = $pdo->query("SELECT COUNT(*) as total FROM surat_masuk");
    // $stats['suratMasuk'] = $stmt->fetch()['total'];

    echo json_encode($stats);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>