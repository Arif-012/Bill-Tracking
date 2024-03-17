// $(document).ready(function(){
//     $('#search').keyup(function(){
//         var query = $(this).val();
//         if(query != ''){
//             $.ajax({
//                 url: 'db_conn.php',
//                 method: 'POST',
//                 data: {query: query},
//                 success: function(data){
//                     $('#search-results').html(data);
//                 }
//             });
//         }
//         else{
//             $('#search-results').html('');
//         }
//     });
// });

function ajaxDonorSearch() {
    let donorSearchName = document.getElementById('searchDonor').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controllers/adminCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('donorSearchName=' + donorSearchName);
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            document.getElementById('searchResult').innerHTML = this.responseText;

        }

    }
}