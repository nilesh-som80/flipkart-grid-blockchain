fetch('/api/author')
        .then(response => response.json())
        .then((data) => {
            console.log(data);
            Array.from(data).forEach(element=>{
                const sData = document.querySelector('#Show')
            let newelement = document.createElement('tr')
            newelement.innerHTML = `<td>${data.name}</td>\n <td>${data.author_id}</td>`
            })
        });