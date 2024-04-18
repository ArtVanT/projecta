
// $.ajax({
//     url: 'template/main.php', // path to your PHP file
//     type: 'POST', // method of sending data
//     data: {
//         key1: 'value1', // data you want to send to PHP file
//         key2: 'value2'
//     },
//     success: function(response) {
//         // code to execute if the request succeeds;
//         // the response is passed to the function
//     },
//     error: function(jqXHR, textStatus, errorThrown) {
//         // code to execute if the request fails; 
//         // the raw request, status codes, and error are passed to the function
//     }
// });


function getMainPage(){

const xhr = new XMLHttpRequest();
xhr.open('GET', 'index.php');

// function wrapper(){
  
xhr.onload = function(){




console.log(document.querySelector('#layout'));
  const data = xhr.response;
  const obj = JSON.parse(data);
for(let i = 0; i < obj.length; i++){
let arr = obj[i];
console.log(arr);


let div1 = document.createElement('div');
document.querySelector('.post__wrapper').appendChild(div1);
  div1.classList.add('posts', 'pure-u-md-7-12');
if (document.querySelector('.post__wrapper') !== null && document.querySelector('.post__wrapper') !== undefined) {
  document.querySelector('.post__wrapper').appendChild(div1);
}



let h1 = document.createElement('h1');
h1.innerHTML = 'Post'
h1.classList.add('content-subhead');
div1.append(h1);

let sect = document.createElement('section');
sect.classList.add('post');
div1.append(sect);

let head = document.createElement('h1');
head.innerHTML = arr['title'];
head.classList.add('post-title');
sect.append(head);

 let descr = document.createElement('div');
  descr.innerHTML = 'Post';
  descr.innerHTML = arr['descr_min'];
  descr.classList.add('post-description');
  sect.append(descr);

  let postImage = document.createElement('div');
  descr.classList.add('post-images', 'pure-g');
  sect.append(postImage);

  let pureU = document.createElement('div');
  descr.classList.add('pure-u-1', 'pure-u-md-1-6');
  postImage.append(descr);

  let Image = document.createElement('img');
  Image.src = `static/image/${arr['image']}`;
  descr.classList.add('pure-img-responsive');
  descr.append(Image);

  // let Article = document.createElement('div');
  // Article.innerHTML = arr['description'];
  // sect.append(Article);

  let articleWrapper = document.createElement('div');
  sect.append(articleWrapper);

  let articleLink = document.createElement('a');
   articleLink.setAttribute('href',`/article/${arr['url']}`);
  console.log(arr['url'])
  articleLink.classList.add('pure-button', 'pure-button-primary');
  articleLink.innerHTML = 'Читать полностью';
  articleWrapper.append(articleLink);

}


 
}


xhr.send();

}

getMainPage();


// $out = '';
// for ($i = 0; $i < count($result); $i++) {
//   $out .= '<div class="posts"> <h1 class="content-subhead">Post</h1><section class="post">';
//   $out .= '<h1 class="post-title">' . $result[$i]['title'] . '</h1>';
//   $out .= '<div class="post-description"><p>' . $result[$i]['descr_min'] . '</p></div>';
//   $out .='<div class="post-images pure-g"><div class="pure-u-1 pure-u-md-1-6">';
//   $out .= '<img src="/static/images/' . $result[$i]['image'] . '" class="pure-img-responsive">';
//   $out .= '</div></div>';
//   $out .= '<div><a href="/article/' . $result[$i]['url'] . '" class="pure-button pure-button-primary">Читать полностью</a></div>';
//   $out .= '</section></div>';
// }