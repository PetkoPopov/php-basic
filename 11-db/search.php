
<body style="background-color: #66ffff">
    <?php

//search.php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','world');
$dsn='mysql:host='.DB_HOST.';dbname='.DB_NAME;//data source name


// създаване на обект с БД връзката се осъществява веднага 
$db=new PDO($dsn,DB_USER,DB_PASS);//php data object
//var_dump($db);
 //брой записи на една страница вземам е общия брой от база и калк броя страници  
if(!empty($_GET['perPage'])){
    $limit=$_GET['perPage'];
    // превръщаме параметъра в желания тип например число 
    $limit=(int)$limit;//прави се с цел  сигурност 
}else{
    $limit=10;
}
if(!empty($_GET['keyword'])){
    $where="WHERE `Name` LIKE :keyword";//важно  Наме-то във "чч" задължително 
    $keyword='%'.$_GET['keyword'].'%';
}else{
    $where='';
}
//echo $where.'WHERE';
//подготвяне на SQL  заявката
$sql="SELECT * FROM country ";

//изпращане на заявката и вземане на обект с резултата 
$rezult=$db->query($sql);


$countSql="SELECT  COUNT(*) as TotalRows from Country $where";
$countRezult=$db->prepare($countSql);
if(!empty($where)){
    $countRezult->bindValue('keyword',$keyword);
}
//$countRezult=$db->prepare($countSql);
$countRezult->execute();
//$countRezult=$db->query($countSql);

$countRow=$countRezult->fetch(PDO::FETCH_NUM);
$totalPages=ceil($countRow[0]/$limit);
//echo$totalPages;die;
if(!empty($_GET['page']))
{
$page=$_GET['page'];
$page=(int)$page;
}else{
    $page=1;
}





$offset=($page-1)*10;
//
//$sql="SELECT * FROM country LIMIT $limit OFFSET $offset";
//

//$rezult=$db->query($sql)// резулт е ОБЕКТ от клас statement 
//zamestwame данните които идват нас с :ЛИМИТ и :ОФФСЕТ 
$sql="SELECT * FROM country $where LIMIT :limit OFFSET :offset";

$rezult=$db->prepare($sql);
$rezult->bindValue('limit', $limit,PDO::PARAM_INT);
$rezult->bindValue('offset',  $offset,PDO::PARAM_INT);
if($where){
    $rezult->bindValue('keyword', $keyword);
}
$rezult->execute();

//echo 'finded row' .$countRow[0];
//echo '<br/>';
//echo $totalPages;
//
//низ за връзка с бази данни 
//Ров-каунт дава брой редове в заявката 
//echo 'how match rez.'.$rezult->rowCount();
//echo '<br/>';
//използзва се феч ассок която дава асоциативен масив 
//
//var_dump($rezult->fetchAll(PDO::FETCH_ASSOC));
//while($row =$rezult->fetch(PDO::FETCH_ASSOC))
//{
//    var_dump($row);
//}
?>
<!doctype html>
<html lang="en">
 
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="PETKO">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Starter Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	  
	  body {
		  padding-top: 5rem;
		}
		.starter-template {
		  padding: 3rem 1.5rem;
		  text-align: center;
		}
    </style>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php 
        if(empty($_SESSION['user'])){}else{echo$_SESSION['user']['first_name'].' '.$_SESSION['user']['last_name'];}?></a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="index.php?page=logout">LOGOUT</a>
         
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="keyword">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
      <div>
          <p>Намерени резултати<?= $countRow[0]?></p>
          <p>брой страници <?= $totalPages?></p>
          <p><?php
              for($i=1;$i<=$totalPages;$i++):?>
               <?php   if($page==$i):?>
              <?=$i;?>
              <?php else:?>
                <a href="?page=<?= $i;?>">
              
              <?php echo $i;?>
              </a> |
              <?php endif;?>
              <?php endfor;?>
          </p>
          
      </div>
<main role="main" class="container">
    <table class="table table-bordered">
        <tr>
            <th>code</th>
            <th>name</th>
            <th>region</th>
            <th>continent</th>
            <th>population</th>
            
        </tr>
        <?php while($row=$rezult->fetch(PDO::FETCH_ASSOC)):?>
        <tr>
            <td><?= $row['Code']?></td>
            <td><?= $row['Name']?></td>
            <td><?= $row['Region']?></td>
            <td><?= $row['Continent']?></td>
            <td><?php echo $row['Population']?></td>
            
            
        </tr>
            <?php endwhile; ?>
    </table>

</main><!-- /.container -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</body>
</html>
