

function finderid()
{
  var input, filter, table, tr, td, i;

  input = document.getElementById("myInputid");
  filter = input.value.toUpperCase();

  table = document.getElementById("client");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++)
  {
    td = tr[i].getElementsByTagName("td")[0];
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

function finderlastname()
{
  var input, filter, table, tr, td, i;

  input = document.getElementById("myInputlastname");
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

function finderfirstname()
{
  var input, filter, table, tr, td, i;

  input = document.getElementById("myInputfirstname");
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

function deleteRow(r)
{
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("client").deleteRow(i);
}


function ConfirmSupp()
{
    if (confirm("Voulez vous vraiment supprimer ce client ? "))
    { 
      return true;
    }
    else
    {
      return false;
    }
}

function ConfirmModif()
{
    if (confirm("Voulez vous vraiment modifier ce client ? "))
    { 
      return true;
    }
    else
    {
      return false;
    }
}

function ConfirmGo()
{
    if (confirm("Voulez vous vraiment accéder au compte de ce client ? "))
    { 
      return true;
    }
    else
    {
      return false;
    }
}

