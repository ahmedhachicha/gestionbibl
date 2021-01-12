<?php
namespace App\Service;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\LivreRepository;

class CartService{

    protected $session;
    protected $livrerepository;
    public function __construct(SessionInterface $session,LivreRepository $livrerepository)
    {
        $this->session=$session;
        $this->livrerepository=$livrerepository;
    }

    public function add($id)
    {
        $panier= $this->session->get('panier',[]);
        if(!empty($panier[$id]))
        {
            $panier[$id]++;
        }
        else{
            $panier[$id]=1;
        }
        
        $this->session->set('panier',$panier);
    }

    public function delete($id)
    {
        $panier= $this->session->get('panier',[]);
        if(!empty($panier[$id]))
        {
            unset($panier[$id]);
        }
       
        
        $this->session->set('panier',$panier);
    }
   public function getFullCart(): array
    {
                 $panier= $this->session->get('panier',[]);
        $panierWithData=[];
        foreach($panier as $id =>$quantity)
        {
        $panierWithData[]=[
         'livre'=>$this->livrerepository->find($id),
         'quantity'=>$quantity
        ];

       }
       return $panierWithData;
  }
  
     public function getTotal(): float
       {
        $total =0;
       
        foreach($this->getFullCart() as $item)
        {
           
            $total+= $item ['livre']->getPrix() * $item['quantity'];
        }
        return $total;
        
            }
}

?>