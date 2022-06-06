import { createStore } from 'vuex'

export default createStore({
  state: {
    cart : {
      items : [],
    },
    totalLength : 0,
    tottalPrice : 0,
    tel : '',
    ville : '',
    adress : '',
    typePayment : '',
    id_user_login : 0,
    email_user_login : '',
    token : '',
  },
  getters: {
  },
  mutations: {
    inisializeStore(){
      // inisialize cart
      if(localStorage.getItem('cart')) {
          this.state.cart = JSON.parse(localStorage.getItem('cart'))
          this.state.cart.items = this.state.cart.items.filter(ele => ele.quantity !== 0)
      }else {
        localStorage.setItem('cart' , JSON.stringify(this.state.cart))
      }
      // inisialize totalLength
      if(localStorage.getItem('totalLength')) {
        this.state.totalLength = parseInt(localStorage.getItem('totalLength'))
      }else {
        localStorage.setItem('totalLength' , parseInt(this.state.totalLength))
      }
      // inisialize tottalPrice
      if(localStorage.getItem('tottalPrice')) {
        this.state.tottalPrice = parseFloat(localStorage.getItem('tottalPrice'))
      }else {
        localStorage.setItem('tottalPrice' , parseFloat(this.state.tottalPrice))
      }
      // inisialize telephone
      if(localStorage.getItem('tel')) {
        this.state.tel = localStorage.getItem('tel')
      }else {
        localStorage.setItem('tel' , this.state.tel)
      }
      // inisialize ville
      if(localStorage.getItem('ville')) {
        this.state.ville = localStorage.getItem('ville')
      }else {
        localStorage.setItem('ville' , this.state.ville)
      }
      // inisialize adress
      if(localStorage.getItem('adress')) {
        this.state.adress = localStorage.getItem('adress')
      }else {
        localStorage.setItem('adress' , this.state.adress)
      }

      // inisialize typePayment
      if(localStorage.getItem('typePayment')) {
        this.state.typePayment = localStorage.getItem('typePayment')
      }else {
        localStorage.setItem('typePayment' , this.state.typePayment)
      }

      // inisialize id of user is login
      if(localStorage.getItem('id_user_login')) {
        this.state.id_user_login = parseInt(localStorage.getItem('id_user_login'))
      }else {
        localStorage.setItem('id_user_login' , parseInt(this.state.id_user_login))
      }
      // inisialize email of user is login
      if(localStorage.getItem('email_user_login')) {
        this.state.email_user_login = localStorage.getItem('email_user_login')
      }else {
        localStorage.setItem('email_user_login' , this.state.email_user_login)
      }
      // inisialize token
      if(localStorage.getItem('token')) {
        this.state.token = localStorage.getItem('token')
      }else {
        localStorage.setItem('token' , this.state.token)
      }
      



    
    },
    addToCart(state , item){
      
      const exists = state.cart.items.filter(ele => ele.product[0].id === item.product[0].id)
      if(exists.length){
        item.quantity = parseInt(exists[0].quantity) + parseInt(item.quantity)
        this.state.cart.items.forEach((element , index) => {
          if(element.product[0].id == item.product[0].id){
            this.state.cart.items[index].product = item.product
            this.state.cart.items[index].quantity = item.quantity
            this.state.cart.items[index].price = parseInt(item.quantity) * parseInt(item.price)
          }
        });
      }else{
        this.state.cart.items.push(item)
      }
      
      this.state.totalLength = 0
      for(let i=0 ; i<this.state.cart.items.length ; i++){
        this.state.totalLength += this.state.cart.items[i].quantity
      }

      localStorage.setItem('cart' , JSON.stringify(this.state.cart))
      localStorage.setItem('totalLength' , parseInt(this.state.totalLength))
      
     
      
    },
    deleteCart(state , id){
      const exists = state.cart.items.filter(ele => ele.product[0].id === id)
      if(exists.length){
        const distroyOrder = state.cart.items.filter(ele => ele.product[0].id !== id)
        this.state.cart.items = distroyOrder
      }
      this.state.totalLength = 0
      for(let i=0 ; i<this.state.cart.items.length ; i++){
        this.state.totalLength += this.state.cart.items[i].quantity
      }

      localStorage.setItem('cart' , JSON.stringify(this.state.cart))
      localStorage.setItem('totalLength' , parseInt(this.state.totalLength))

    },
    calculePrice(){

      // this.state.cart.items.forEach((element) => {
      //   this.state.tottalPrice = this.state.tottalPrice + parseFloat(element.price)
      // });
      
      this.state.tottalPrice = 0
      this.state.cart.items.forEach((element) => {
        this.state.tottalPrice = this.state.tottalPrice + parseFloat(element.price)
      });
      localStorage.setItem('tottalPrice' , parseFloat(this.state.tottalPrice))

    },
    addAdressInfoToCart(state , item){
      state.tel = item.tel
      state.ville = item.ville
      state.adress = item.adress
      localStorage.setItem('tel' , state.tel)
      localStorage.setItem('ville' , state.ville)
      localStorage.setItem('adress' , state.adress)
    },
    addTypePaymentToCart(state , item){
      state.typePayment = item.typePayment
      localStorage.setItem('typePayment' , state.typePayment)
      console.log('type payment : '+state.typePayment)
    },
    destroyStore(){

      // destroy cart
        localStorage.setItem('cart' , JSON.stringify({
          items : [],
        }))
      // destroy totalLength
        localStorage.setItem('totalLength' , parseInt(0))
      // destroy tottalPrice
        localStorage.setItem('tottalPrice' , parseFloat(0))
      // destroy telephone
        localStorage.setItem('tel' , '')
      // destroy ville
        localStorage.setItem('ville' , '')
      // destroy adress
        localStorage.setItem('adress' , '')
      // destroy typePayment
        localStorage.setItem('typePayment' , '')

    },
    logout(){
      // destroy id user login
      localStorage.setItem('id_user_login' , 0)
      // destroy email user login
        localStorage.setItem('email_user_login' , '')
      // destroy token
        localStorage.setItem('token' , '')
        window.location.href = 'http://localhost:8080'
    }

  },
  actions: {
  },
  modules: {
  }
})
