<template>

    <div class="container">
    <div class="card-body">
      I'm an example component.

      <button class="btn btn-danger btn-sm float-right" @click="changeState('hide')">Cancle</button>
      <button class="btn btn-success btn-sm float-right mx-1" @click="changeState('show')">Add new</button>
      
    </div>

    <ul class="list-group row col-4 ml-2" v-if="state==='show'">

         <li class="list-group-item"> <input type="text" class="form-control" v-model="newItem" id="newItem" v-on:keyup.enter="saveItem"> </li>
         <li class="list-group-item"> <button class="col-auto btn btn-primary btn-sm" @click="saveItem">Save</button> </li>
          
    </ul>
    <ul class="list-group row col-4 ml-2" v-if="state==='show'">

    <li class="list-group-item" v-for="item in items">{{item.label}} <button class="btn btn-danger btn-sm float-right" @click="deleteItem(item)">Delete</button></li>
    
    
    </ul>
    </div>

</template>

<script>
export default {
    name: "buttons-component",
    data() {
        return {
            header: 'To Do List',
            state: 'hide',
            newItem: "",
            items: [
                { label: 'a'},
                { label: 'b'}
            ] 
        }       
    },
    
    methods: {
        changeState: function(stateValue)
        {
            this.state = stateValue;
            this.newItem = "";
        },
        saveItem: function()
        {
           var input = this.newItem;
           this.items.push(
               {label:input}
           );
           this.newItem = "";
        },
        deleteItem: function(item)
        {
            const itemIndex = this.items.indexOf(item);
            this.items.splice(itemIndex, 1);
        }
    }
    
}
</script>