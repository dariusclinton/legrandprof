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
        $__internal_ddfbfc3a3951a1328f40a134d0557a47e8e9026ffe361006dc7d22d619df7593 = $this->env->getExtension("native_profiler");
        $__internal_ddfbfc3a3951a1328f40a134d0557a47e8e9026ffe361006dc7d22d619df7593->enter($__internal_ddfbfc3a3951a1328f40a134d0557a47e8e9026ffe361006dc7d22d619df7593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ddfbfc3a3951a1328f40a134d0557a47e8e9026ffe361006dc7d22d619df7593->leave($__internal_ddfbfc3a3951a1328f40a134d0557a47e8e9026ffe361006dc7d22d619df7593_prof);

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
