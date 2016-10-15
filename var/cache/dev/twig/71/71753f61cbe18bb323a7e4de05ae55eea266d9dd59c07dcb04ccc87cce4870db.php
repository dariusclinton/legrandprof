<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6b0a867d466a6e7ad11932bb025222f14cd765448fd8b86f462503f1e0c09ab6 extends Twig_Template
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
        $__internal_203849a7bca6605a1f5f20f8b1d4cd55da6b58acc94fbee35a784282127471ce = $this->env->getExtension("native_profiler");
        $__internal_203849a7bca6605a1f5f20f8b1d4cd55da6b58acc94fbee35a784282127471ce->enter($__internal_203849a7bca6605a1f5f20f8b1d4cd55da6b58acc94fbee35a784282127471ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_203849a7bca6605a1f5f20f8b1d4cd55da6b58acc94fbee35a784282127471ce->leave($__internal_203849a7bca6605a1f5f20f8b1d4cd55da6b58acc94fbee35a784282127471ce_prof);

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
