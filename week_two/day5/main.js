// let users = document.querySelector(".users");

// fetch('https://jsonplaceholder.typicode.com/users')
//       .then(response => response.json())
//       .then(allusers =>{
//         allusers.forEach(user => {
//             users.innerHTML += `
//                 <div class="user">
//                     <p><strong>Name:</strong> ${user.name}</p>
//                     <p><strong>Email:</strong> ${user.email}</p>
//                     <hr>
//                 </div>
//             `;
//         });
//       }
// )


// async function fetchingData() {
//   try {
//     const response = await fetch('https://jsonplaceholder.typicode.com/users');
//     const allusers = await response.json();
   
//     allusers.forEach(user => {
//       users.innerHTML += `
//         <div class="user">
//           <p><strong>Name:</strong> ${user.name}</p>
//           <p><strong>Email:</strong> ${user.email}</p>
//           <hr>
//         </div>
//       `;
//     });
//   } catch (error) {
//     console.log("Error fetching users:", error);
//   }
// }

// fetchingData();


// trying local api => "http://localhost:8082/day5/apiTest.php"

let users = document.querySelector(".users");

fetch('http://localhost:8082/day5/apiTest.php')
      .then(response => response.json())
      .then(data =>{
        if(data.connection) {
            data.data.forEach(user => {
                users.innerHTML += `
                    <div class="user">
                        <p><strong>name:</strong> ${user.name}</p>
                        <p><strong>age:</strong> ${user.age}</p>
                        <hr>
                    </div>
                `;
            });
        } else {
            console.log(data.message);
            
        }
      }
)