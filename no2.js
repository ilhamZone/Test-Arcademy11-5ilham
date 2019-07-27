/*
  Format username: merupakan kombinasi dari huruf kecil, huruf besar dan angka dengan panjang 5-9 karakter.
  Username tidak boleh diawali dengan angka / karakter special. 
*/
function is_username_valid(user) {
  let userCheck = /^[a-zA-Z]+[0-9].{2,6}$/;
  if (userCheck.test(user)) {
    return true;
  }
  return false;
}
/*
  Format password: merupakan kombinasi dari huruf kecil, huruf besar minimal satu karakter,
  angka minimal satu karakter, dan karakter spesial minimal satu karakter dan harus memiliki karakter
  simbol “=” dan panjang minimal 8 karakter.
*/

function is_password_valid(pass) {
  let passCheck = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*\W)(?=.*[=]).{8,}$/;
  if (passCheck.test(pass)) {
    return true;
  }
  return false;
}

console.log(is_username_valid('Xrutaf888')); // true
console.log(is_username_valid('1Diana')); // false

console.log(is_password_valid('passW0rd=')); // true
console.log(is_password_valid('C0d3YourFuture!#')); // false
