async function fetchdata(){
    try{
        let response = await fetch('https://jsonplaceholder.typicode.com/posts');
        let data = await response.json();
        console.log(data);
       }catch(error){

        console.error('error fetching data:', error)
       }
}

fetchdata();

async function sequentialExcution(){
    console.log('fetching first post...');
    let firstpost = await fetch ('https://jsonplaceholder.typicode.com/posts/1').then(response => response.json());
    console.log('first post:', firstpost);

    console.log('fetching second post...');
    let secondpost = await fetch ('https://jsonplaceholder.typicode.com/posts/2').then(response => response.json());
    console.log('second post:', secondpost);

}
sequentialExcution();


  async function parallelExecution(){
    let urls = [
        'https://jsonplaceholder.typicode.com/posts/1',
        'https://jsonplaceholder.typicode.com/posts/2',
        'https://jsonplaceholder.typicode.com/posts/3'
    ];
    try{
        let results = await Promise.all(urls.map(url => fetch(url).then(response => response.json())));
        console.log('posts fetched in parallel:', results);
    }catch(error){
        console.error('error fetching data:', error);
    }
}

async function fetchpostinloop() {
    let postIds = [1, 2, 3];
    for (let id of postIds){
        let post = await fetch ('https://jsonplaceholder.typicode.com/posts/${id}').then(response => response.json());
    console.log('post ${id}:', post);
    }
}
fetchpostinloop();


