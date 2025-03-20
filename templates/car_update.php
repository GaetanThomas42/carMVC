<?php
$title = "Modifier " . $car->getModel();
require_once("block/header.php");
?>

<h1 class="text-primary">Modifier <?= $car->getBrand() ?> <?= $car->getModel() ?> </h1>

<img src="images/<?= $car->getBrand() ?>" alt="<?= $car->getModel() ?>">


<form method="POST" action="index.php?action=edit&id=<?= ($car->getId()) ?>">

    <label for="model">Model</label>
    <input id="model" type="text" name="model" value="<?= ($car->getModel())  ?>">
    <?php if (isset($errors['model'])): ?>
        <p class="text-danger"><?= $errors['model'] ?></p>
    <?php endif; ?>

    <label for="brand">Brand</label>
    <input type="text" name="brand" value="<?= $car->getBrand()  ?>">
    <?php if (isset($errors['brand'])): ?>
        <p class="text-danger"><?= $errors['brand'] ?></p>
    <?php endif; ?>

    <label for="horsePower">HorsePower</label>
    <input id="horsePower" type="number" name="horsePower" value="<?= $car->getHorsePower()  ?>">
    <?php if (isset($errors['horsePower'])): ?>
        <p class="text-danger"><?= $errors['horsePower'] ?></p>
    <?php endif; ?>

    <label for="image">Image</label>
    <input id="image" type="text" name="image">
    <?php if (isset($errors['image'])): ?>
        <p class="text-danger"><?= $errors['image'] ?></p>
    <?php endif; ?>

    <button class="btn btn-outline-success">Valider</button>

</form>
<?php
require_once("block/footer.php");