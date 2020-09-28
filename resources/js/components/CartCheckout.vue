<template>
<div class="container">
  <div class="checkout-box">
    <ul class="checkout-list">
      <transition-group name="fade">
      <li v-for="(product, index) in getProductsInCart" :key="index" class="checkout-product text-left">
        <img :src="'images/Produtos/' + product.UrlImagem" onerror="this.onerror=null; this.src='images/Produtos/product.jpg'" alt="" class="product-image">
        <h3 class="product-name">{{ product.Nome }}</h3>
        <span class="product-price">AOA {{ product.Preco }},00 </span>
        <button class="product-remove" @click="remove(index)">X</button>
      </li>
      </transition-group>
    </ul>
    <div class="form-group row justify-content-center mt-3" v-if="hasProduct()">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block btn-bg" @click="encomendar()">
                Confirmar
            </button>
        </div>
    </div>
    <div v-if="!hasProduct()" class="checkout-message">
      <h3>O Carrinho está vazio...</h3>
      <router-link to="./">Voltar para a lista de produtos</router-link>
    </div>
    <h3 class="total" v-if="hasProduct()">
      Total: AOA {{ totalPrice() }},00
    </h3>
   </div>
</div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';
import axios from 'axios';
//import func from '../../../vue-temp/vue-editor-bridge';

export default {
  computed: {
    ...mapGetters([
      'getProductsInCart',
    ]),
  },

  methods: {
    ...mapActions([
      'removeProduct',
    ]),
    hasProduct() {
      return this.getProductsInCart.length > 0;
    },
    totalPrice() {
      return this.getProductsInCart.reduce((current, next) =>
        current + next.Preco, 0);
    },
    remove(index) {
      this.removeProduct(index);
    },
    encomendar()
    {
        var produtos = [];
        var carrinhoActual =  this.getProductsInCart;

        for(var i = 0; i < this.getProductsInCart.length; i++)
        {
            var inserir = true;
            for(var j = 0; j < produtos.length; j++)
            {
                if(produtos[j].IdProduto == carrinhoActual[i].Id)
                {
                    produtos[j].Quantidade++;
                    inserir = false;
                    break;
                }
            }

            if(inserir)
            {
                var obj = {
                    IdVenda: 0,
                    IdProduto: carrinhoActual[i].Id,
                    Preco: carrinhoActual[i].Preco,
                    Quantidade: 1
                };
                produtos.push(obj);
            }
        }

        axios.post('/api/pedido', {
                'Total': '100',
                'ValorPago': '100',
                'Telefone1': '123',
                'Telefone2': '123',
                'Email': 'b@gmail.com',
                'Localizacao': 'Luanda',
                'AoChegar': 'Ligue',
                'IdCliente': '14',
                'OrigemCliente': 'Remota'
            })
            .then(function (response) {
                for(var k = 0; k<produtos.length; k++)
                {
                    produtos[k].IdVenda = response.data;
                }
                console.log(produtos);
            })
            .catch(function (error) {
                console.log(error);
            });

    },
  },
};
</script>

<style scoped>
  .checkout-box {
    width: 100%;
    max-width: 900px;
    display: flex;
    flex-direction: column;
    margin: 50px auto;
    box-sizing: border-box;
    padding: 1em;
  }

  .checkout-list {
    padding: 0;
  }

  .checkout-product {
    display: grid;
    grid-template-columns: 1fr 3fr 2fr .5fr;
    background-color: #fff;
    box-shadow: 0px 0px 10px rgba(73, 74, 78, 0.1);
    border-radius: 5px;
    list-style: none;
    box-sizing: border-box;
    padding: .8em;
    margin: 1em 0;
  }

  .checkout-product * {
    place-self: center;
  }
  .product-image {
    grid-column: 1/2;
    width: 50%;
  }

  .product-name {
    box-sizing: border-box;
  }

  .product-price {
    font-size: 1.2em;
    font-weight: bold;
  }

  .product-remove {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    border: 0;
    background-color: #E0E0E0;
    color: #fff;
    cursor: pointer;
  }

  .total {
    font-size: 2em;
    font-weight: bold;
    align-self: flex-end;
  }

  .checkout-message {
    font-size: 1.5em;
  }

  .fade-enter-active, .fade-leave-active {
    transition: all .5s;
  }

  .fade-enter, .fade-leave-to {
    transform: translateX(-40px);
    opacity: 0;
  }
</style>
