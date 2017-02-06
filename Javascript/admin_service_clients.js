
function findersubject()
{
  var input, filter, table, tr, td, i;

  input = document.getElementById("myInputsubject");
  filter = input.value.toUpperCase();

  table = document.getElementById("client");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++)
  {
    td = tr[i].getElementsByTagName("td")[2];
    if (td)
    {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1)
      {
        tr[i].style.display = "";
      }
      else
      {
        tr[i].style.display = "none";
      }
    }       
  }
}

function finderdate()
{
  var input, filter, table, tr, td, i;

  input = document.getElementById("myInputdate");
  filter = input.value.toUpperCase();

  table = document.getElementById("client");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++)
  {
    td = tr[i].getElementsByTagName("td")[4];
    if (td)
    {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1)
      {
        tr[i].style.display = "";
      }
      else
      {
        tr[i].style.display = "none";
      }
    }       
  }
}

function finderIdclient()
{
  var input, filter, table, tr, td, i;

  input = document.getElementById("myInputidc");
  filter = input.value.toUpperCase();

  table = document.getElementById("client");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++)
  {
    td = tr[i].getElementsByTagName("td")[1];
    if (td)
    {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1)
      {
        tr[i].style.display = "";
      }
      else
      {
        tr[i].style.display = "none";
      }
    }       
  }
}