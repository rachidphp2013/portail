<?php use_stylesheet('asso.css') ?>
<?php use_stylesheet('article.css') ?>
<?php use_helper('Text') ?>

<h2><?php echo $asso ? $asso->getName() : "Cette association n'existe pas" ?></h2>
<?php if($asso): ?>
  <div id="asso">
    <li>
      <h3><a href="<?php echo $asso->getUrlSite() ?>"><?php echo $asso->getName() ?></a></h3>
      <img class="logo" src="<?php echo $asso->getLogo() ?>">
      <div class="desc">
  <?php echo truncate_text($asso->getDescription(),256) ?>
        </br>
        <a class="website" href="<?php echo $asso->getUrlSite() ?>"><?php echo $asso->getUrlSite() ?></a>
      </div>
    </li>
  </div>
<?php endif ?>

<h3>Articles de <?php echo $asso ? $asso->getName() : "Cette association n'existe pas" ?></h3>
<?php if(count($articles) > 0): ?>
<ul id="article_list">
<?php foreach($articles as $article) : ?>
  <h3><?php echo $article->getName() ?></h3>
  Publié par <?php echo $article->getAsso()->getName() ?> le <?php echo $article->getCreatedAt() ?>  
  <!-- todo only if authorized -->
  - <a href="<?php echo url_for('article/edit?id='.$article->getId()) ?>">Editer</a>

  <img class="logo" src="<?php echo $article->getAsso()->getLogo() ?>">
  <div class="desc">
  <?php echo truncate_text($article->getText(),256) ?>
  </br>
  <a class="link" href="<?php echo url_for('article/show/?id='.$article->getId()) ?>">Lire la suite</a>
  </div>

<?php endforeach; ?>
</ul>
<?php else: ?>
  Cette association n'a pas encore publié d'article.
<?php endif ?>