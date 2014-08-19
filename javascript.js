

    var the_url = "http://localhost:8080/projet/faculte/departement/formation" 

    $.ajax({
      url: the_url,
      dataType: 'jsonp',
      type: 'get',
      success: function(data) {
        var json_response = data;
        alert(data);
      }
    });
