<template>
	<b-container>

		<!-- Title -->
		<h1 class="my-4">
			<i class="fas fa-funnel-dollar"></i>
			<span>Change Calculator</span>
		</h1>

		<!-- Form -->
		<b-form @submit.prevent="handleSubmit">

			<!-- Cost -->
			<b-form-group
			  label="Cost"
			  label-for="cost"
			>
			  <b-form-input
					id="cost"
					v-model="cost"
					placeholder="Enter the cost (USD)"
					type="number"
					step="0.01"
					required
			  ></b-form-input>
			</b-form-group>

			<!-- Provided -->
			<b-form-group
			  label="Provided"
			  label-for="provided"
			>
			  <b-form-input
					id="provided"
					v-model="provided"
					placeholder="Enter the amount provided (USD)"
					type="number"
					step="0.01"
					required
				></b-form-input>
			</b-form-group>

			<!-- Submit button -->
			<b-button variant="primary" type="submit">Calculate</b-button>
		</b-form>

		<!-- Display change -->
		<div v-if="change" class="mt-4">
			<h2>
				<i class="fas fa-money-bill-wave-alt"></i>
				<span>Change</span>
			</h2>
			<b-card v-for="(denomination, index) in change" :key="index" class="my-4">
				<b-card-text>
					<h5 class="text-success d-inline">${{ denomination.denomination / 100 }}</h5>
					<span>x</span>
					<h6 class="text-dark d-inline">{{ denomination.count }}</h6>
				</b-card-text>
			</b-card>
		</div>

		<!-- Error -->
		<b-card v-if="error" class="mt-4">
			<b-card-text class="text-danger">{{ error }}</b-card-text>
		</b-card>

	</b-container>
</template>

<script>

	export default {
		data() {
			return {
				cost: '',
				provided: '',
				currency: 'USD',
				change: null,
				error: null
			};
		},

		methods: {
			async handleSubmit() {
				this.error = null;
				this.change = null;

				let payload = {
					cost: this.cost,
					provided: this.provided,
					currency: this.currency
				};

				try {
					this.change = (await axios.post('/api/calculate-change', payload)).data;
				} catch(error) {
					this.error = error.response.data;
				}
			}
		}
	}

</script>

<style lang="scss">
	
</style>
