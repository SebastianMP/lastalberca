        <template v-if="nombre && appat  && apmat && bday && bol && escuela && tel && mail">
        		<button type="submit" class="w3-button w3-block w3-round-xxlarge w3-indigo">Button</button>
        </template>
        <template v-if="!(nombre && appat  && apmat && bday && bol && escuela && tel && mail)">
        <button type="submit" class="w3-button w3-round-xxlarge w3-block w3-red" disabled>Enviar</button>
        </template>