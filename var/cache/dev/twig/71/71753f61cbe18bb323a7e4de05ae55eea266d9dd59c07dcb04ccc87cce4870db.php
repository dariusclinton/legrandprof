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
        $__internal_e3d12775c7c0e9e32d2f29ac8cc23ed3e50e723d15a79ae0146ac0d49af1f40b = $this->env->getExtension("native_profiler");
        $__internal_e3d12775c7c0e9e32d2f29ac8cc23ed3e50e723d15a79ae0146ac0d49af1f40b->enter($__internal_e3d12775c7c0e9e32d2f29ac8cc23ed3e50e723d15a79ae0146ac0d49af1f40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e3d12775c7c0e9e32d2f29ac8cc23ed3e50e723d15a79ae0146ac0d49af1f40b->leave($__internal_e3d12775c7c0e9e32d2f29ac8cc23ed3e50e723d15a79ae0146ac0d49af1f40b_prof);

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
