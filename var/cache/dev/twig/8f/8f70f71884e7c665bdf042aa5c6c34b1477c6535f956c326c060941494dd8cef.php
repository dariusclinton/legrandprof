<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e4ebd5eaed858d7f7116dd4403aa8bc4187eab4ab60224e915c59e0eca2a54c9 extends Twig_Template
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
        $__internal_011cfedf10bedfcb723c12ee245f63b0c797a099d0ec76bbdb4a8fbecf585dee = $this->env->getExtension("native_profiler");
        $__internal_011cfedf10bedfcb723c12ee245f63b0c797a099d0ec76bbdb4a8fbecf585dee->enter($__internal_011cfedf10bedfcb723c12ee245f63b0c797a099d0ec76bbdb4a8fbecf585dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_011cfedf10bedfcb723c12ee245f63b0c797a099d0ec76bbdb4a8fbecf585dee->leave($__internal_011cfedf10bedfcb723c12ee245f63b0c797a099d0ec76bbdb4a8fbecf585dee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
