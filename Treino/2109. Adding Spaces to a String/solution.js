/**
 * @param {string} s
 * @param {number[]} spaces
 * @return {string}
 */
var addSpaces = function(s, spaces) {
    const array_s=[]
    spaces.forEach((valor, i) => {
        if(i===0){
            array_s.push(s.slice(0,valor)) 
        }else {
             array_s.push(s.slice(spaces[i-1],valor)) 
        }
        
    })
    array_s.push(s.slice(spaces.at(-1)));
    console.log(array_s.join(" "))
    return array_s.join(" ")
};