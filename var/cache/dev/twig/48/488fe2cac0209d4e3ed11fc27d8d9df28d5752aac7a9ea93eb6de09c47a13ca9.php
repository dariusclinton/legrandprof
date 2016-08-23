<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_9c0ed8da91f0d46460ab323d9f3ff736501c15061db04b5b56da4150528d541b extends Twig_Template
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
        $__internal_b73a1a341326673f958b12cd8761533cce7987a0d81fac29fe4073d464ebcba6 = $this->env->getExtension("native_profiler");
        $__internal_b73a1a341326673f958b12cd8761533cce7987a0d81fac29fe4073d464ebcba6->enter($__internal_b73a1a341326673f958b12cd8761533cce7987a0d81fac29fe4073d464ebcba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b73a1a341326673f958b12cd8761533cce7987a0d81fac29fe4073d464ebcba6->leave($__internal_b73a1a341326673f958b12cd8761533cce7987a0d81fac29fe4073d464ebcba6_prof);

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
