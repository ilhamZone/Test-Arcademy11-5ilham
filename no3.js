function cetakGambar(n) {
  for (let i = 1; i <= n; i++) {
    for (j = 1; j <= n; j++) {
      if (j == 1 || j == n || i == (n + 1) / 2) {
        document.write('*' + '&nbsp');
      } else {
        document.write('=' + '&nbsp');
      }
    }
    document.write('<br/>');
  }
}

cetakGambar(5);