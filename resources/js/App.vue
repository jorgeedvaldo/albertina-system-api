<template>
  <div>
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light ftco-navbar-light-2" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/loja">Loja - Albertina & Filhos</a>
            <ul class="navbar-nav">
                <li class="nav-item"><router-link to="/" class="nav-link">Produtos <i class="icon-cake"></i></router-link></li>
                <li class="nav-item"><router-link to="/checkout" class="nav-link"> Carrinho <i class="icon-shopping-cart"></i> <span class="badge badge-danger" v-if="hasProduct()">{{ getProductsInCart.length }}</span></router-link></li>
                <li class="nav-item"><a href="/" class="nav-link"> <i class="icon-close"></i> Sair da Loja</a></li>
            </ul>
        </div>
      </nav>
      <transition name="leave">
        <router-view></router-view>
    </transition>
  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';
import mainMenu from './components/Menu';
import btn from './components/Btn';
import popupcart from './components/Popupcart';
import maskBg from './components/Mask';
export default {
  components: {
    mainMenu,
    btn,
    popupcart,
    maskBg,
  },
  methods: {
    ...mapActions([
      'showOrHiddenPopupCart',
    ]),
    hasProduct() {
      return this.getProductsInCart.length > 0;
    },
    showPopupCart() {
      this.showOrHiddenPopupCart();
    },
  },
  computed: {
    ...mapGetters([
      'getProductsInCart',
      'getPopupCart',
    ]),
  },
};
</script>
<style>
  @import './assets/css/normalize.css';
  @import url('https://fonts.googleapis.com/css?family=Roboto');

  a {
    color: #000;
    text-decoration: none;
  }
  .container {
    width: 100%;
  }
  .cart {
    position: absolute;
    top: 75px;
    right: 300px;
  }
  .btn-circle {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    position: absolute;
    top: -5px;
    right: -5px;
    background-color: #fff;
    color: #000;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .leave-enter-active, .leave-leave-active {
    transition: all 1.2s;
  }
  .leave-enter, .leave-leave-to {
    opacity: 0;
    transform: translateX(-50%);
  }
  .appear-enter-active {
    animation: appear-animation .5s;
  }
  .appear-leave-active {
    animation: appear-animation .5s reverse;
  }
  @keyframes appear-animation {
    0% {
      transform: translateY(-50%);
      opacity: 0;
    }
    100% {
      transform: translateY(0%);
      opacity: 1;
    }
  }
</style>
