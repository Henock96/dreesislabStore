<?php
namespace  App\Form\Extension;


use Sylius\Bundle\CoreBundle\Form\Type\User\AdminUserType;
use Sylius\Component\Core\Model\AdminUserInterface;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

final class AdminUserTypeExtension extends AbstractTypeExtension {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder ->add('roles', ChoiceType::class, [
            'choices'=> [
                "SuperAdmin" => AdminUserInterface::DEFAULT_ADMIN_ROLE,
                "Vendeur" => "ROLE_VENDEUR"
            ],
            'multiple' => true
        ]);
    }
    public static function getExtendedTypes(): iterable
    {
        return [AdminUserType::class];
    }


}
