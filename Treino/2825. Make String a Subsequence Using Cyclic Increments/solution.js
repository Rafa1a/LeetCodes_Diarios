/**
 * @param {string} str1
 * @param {string} str2
 * @return {boolean}
 */
var canMakeSubsequence = function(str1, str2) {
    function charant(caracter){
        if(caracter==="a") return "z";
        else return String.fromCharCode(caracter.charCodeAt(0)-1)
    }
    let i1=0
    let i2=0
    while (i1<str1.length && i2<str2.length){
        let s1 = str1[i1]
        let s2 = str2[i2]
        if(s1===s2 || s1===charant(s2)){
            i1++
            i2++
        }else i1++
    }
    // console.log(result)
    return i2===str2.length
   
};