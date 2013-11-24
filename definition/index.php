<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

  <?php 
    $title = 'Le Revenu de Base, qu\'est ce que c\'est ?';
    include('../_head.php')
  ?>
  
  <body class="page-definition">
    <?php include('../_ie.php')?>
    <?php include('../_common-header.php')?>
  
    <h1 class="main-title">Le Revenu de Base, qu'est ce que c'est ?</h1>

    <div class="card">
	    <div class="definition"> 
		    «&nbsp;Le <strong>Revenu de Base</strong> est 
		    <a href="#inalienable">un droit inaliénable,</a> 
		    <a href="#inconditionnel">inconditionnel,</a> 
		    <a href="#cummulable">cummulable avec d'autres revenus,</a> 
		    <a href="#tous">distribué par une communauté politique à tous ses membres,</a>
		    <a href="#vie">de la naissance à la mort,</a> 
		    <a href="#individuelle">sur la base individuelle,</a>
		    <a href="#exigence">sans contrôle des ressources ni exigence de contrepartie,</a>
		    <a href="#montant">dont le montant et le financement sont ajustés démocratiquement.&nbsp;</a>&nbsp;»
	    </div>
	    
      <p class="bulle" id="inalienable">Le droit à un revenu de base, comme le droit de vote, ne peut être retiré à une personne pour quelque raison que ce soit, de même ce droit ne peut pas être rétrocédé à quelqu'un d'autre.</p>
      <p class="bulle" id="inconditionnel">Le droit à un revenu de base n'est pas soumis à condition, que ce soit de revenu, d'âge ou d'une quelconque contrepartie.</p>
      <p class="bulle" id="cummulable">Le revenu de base est touché en plus d'un salaire ou d'une rente sans que son montant n'en soit modifier.</p>
      <p class="bulle" id="tous">Tous les individus ont le droit à ce revenu. Une communauté politique peut désigner un pays ou la zone euro et plus généralement l'ensemble des utilisateurs d'une monnaie.</p>
      <p class="bulle" id="vie">Le revenu de base est donné «du berceau à la tombe», tout au long de la vie.</p>
      <p class="bulle" id="individuelle">Le revenu de base est donné à chaque individu, il ne s'applique pas à un foyer.</p>
      <p class="bulle" id="exigence">Aucun regard n'est possible quand à l'usage de ce revenu. S'il est pensé pour couvrir les besoins de subsistance des individus, vous restez libre de l'utiliser comme bien vous semble.</p>
      <p class="bulle" id="montant">Le montant est lié au mode de financement choisi. Il appartient à la communauté politique de le définir et de l'ajuster au fil du temps.</p>
          
    </div>
        
    <?php include('../_footer.php') ?>
	      
    <script src="/js/jquery-1.9.1.min.js"></script>
    <script>
    $(document).ready(function () {
    	   $(".definition a").on({
    	      mouseenter: function () {
    	          $(this).addClass("active");
    	          $($(this).attr("href")).addClass("active");
    	      },
    	      mouseleave: function () {
    	          $(this).removeClass("active");
    	          $($(this).attr("href")).removeClass("active");
    	      }
    	  });
    });
    </script> 
    
  </body>
</html>
