formElem.onsubmit = async (e) => {
        e.preventDefault();
    
        let response = await fetch('reg.php', {
          method: 'POST',
          body: new FormData(formElem)
        });
    
        let result = await response.json();
    
        alert(result.message);
    };
