<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d48e8111e85408c26f5dc245eeec2cbc1432b37ee8677da4b93bb4a26c4cc076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b034680576b7c7ff1ab1165bb3e303b3364e0e0cb5a2ab5410ddb014183406f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b034680576b7c7ff1ab1165bb3e303b3364e0e0cb5a2ab5410ddb014183406f->enter($__internal_3b034680576b7c7ff1ab1165bb3e303b3364e0e0cb5a2ab5410ddb014183406f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3b034680576b7c7ff1ab1165bb3e303b3364e0e0cb5a2ab5410ddb014183406f->leave($__internal_3b034680576b7c7ff1ab1165bb3e303b3364e0e0cb5a2ab5410ddb014183406f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
