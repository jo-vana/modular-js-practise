// var user = {
//     data :[
//         {name:"Name1", age:37},
//         {name:"Name2", age:30}
//     ],
//     clickHandler:function (e) {
//         var randomNumber = ((Math.random()*2|0)+1)-1;
//         // random number between 0 and 1​
//         $("input").val(this.data[randomNumber].name+ " got "+ this.data[randomNumber].age + " age.");
//     }
// }
// // $("button").click(user.clickHandler());
// $ ("button").click (user.clickHandler.bind (user));

// - - - - - - - - -
var anArrayLikeObj = {
    0:"Martin",
    1:78,
    2:67,
    3:["Letta", "Marieta", "Pauline"],
    length:4
};

var newArray = Array.prototype.slice.call(anArrayLikeObj, 2);

// console.log(newArray);// ["Martin", 78, 67, Array[3]]​

// Search for "Martin" in the array-like object​
console.log(Array.prototype.indexOf.call(anArrayLikeObj, "Martin")=== -1? false:true);//true

// - - - - - - - - - - - - - - - - -

