<template>
<div>
  <Header />
  <Filter />
  <Navbar />
  <router-view/>
  <Footer/>
</div>
</template>

<script>
import Footer from './components/Footer'
import Navbar from './components/Navbar'
import Header from './components/Header'
import Filter from './components/Filter'

export default {
  name: 'App',
  components: {
    Footer,
    Navbar,
    Header,
    Filter

  }
}
</script>

<style>

</style>
