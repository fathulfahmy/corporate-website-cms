<x-container.py>
    <x-container.center>
        <div class="grid gap-10 md:grid-cols-5">

            <div class="md:col-span-2">
                <x-typography.section>
                    <x-slot:title>Frequently<br>asked questions</x-slot>
                    <x-slot:subtitle>Answers to the most frequently asked questions.</x-slot>
                </x-typography.section>
            </div>

            <div class="md:col-span-3">
                <div class="divide-y divide-gray-200" data-aos="fade-up">
                    <x-faq.dropdown title="Can I cancel at anytime?"
                        content="Yes, you can cancel anytime no questions are asked while you cancel but we would highly appreciate if you will give us some feedback. " />
                    <x-faq.dropdown class="pt-6" title="My team has credits. How do we use them?"
                        content="Once your team signs up for a subscription plan. This is where we sit down, grab a cup of coffee and dial in the details." />
                    <x-faq.dropdown class="pt-6" title="How does Preline's pricing work?"
                        content="Our subscriptions are tiered. Understanding the task at hand and ironing out the wrinkles is key." />
                    <x-faq.dropdown class="pt-6" title="How secure is Preline?"
                        content="Protecting the data you trust to Preline is our first priority. This part is really crucial in keeping the project in line to completion." />
                    <x-faq.dropdown class="pt-6" title="How do I get access to a theme I purchased?"
                        content="If you lose the link for a theme you purchased, don't panic! We've got you covered. You can login to your account, tap your avatar in the upper right corner, and tap Purchases. If you didn't create a login or can't remember the information, you can use our handy Redownload page, just remember to use the same email you originally made your purchases with." />
                    <x-faq.dropdown class="pt-6" title="Upgrade License Type"
                        content="There may be times when you need to upgrade your license from the original type you purchased and we have a solution that ensures you can apply your original purchase cost to the new license purchase." />
                </div>
            </div>

        </div>
    </x-container.center>
</x-container.py>
