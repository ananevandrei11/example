const arr1 = [7,4,3,5,8,1];
const out1 = document.querySelector('.out1');
const out2 = document.querySelector('.out2');
const out3 = document.querySelector('.out3');

function fn1(arr, myFunc, block) {
   myFunc(arr, block);
}

function showArr(arr, block) {
    let out = '';
    for (let i=0; i < arr.length; i++) {
        out += arr[i]+'_';
    }
    block.innerHTML = out;
}
function showArr2(arr, block) {
    let out = '';
    for (let i=0; i < arr.length; i++) {
        out += arr[i]+'*';
    }
    block.innerHTML = out;
}

fn1(arr1, showArr, out1);
fn1(arr1, showArr2, out2);

function squad(item) {
   return item**2;
}

const arr2 = arr1.map(squad);
showArr(arr2, out3);

// асинхронная функци callback

// #1
//async function pageLoader(callback) {
//    const data = await fetch('https://jsonplaceholder.typicode.com/todos/1')
//    callback(data);
//}
// #2
function pageLoader(callback) {
    fetch('https://jsonplaceholder.typicode.com/todos/1')
    .then(res => res.json())
    .then(json => callback(json))
}

function getAJAX(data) {
    console.log('Send request');
    console.log('Get answer');
    console.log(data);
}

pageLoader(getAJAX);

