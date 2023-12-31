<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">

                <form method="POST" action="/marriageRegistrations">
                    @csrf
                    <h2 class="text-xl font-bold mb-4">Marriage Registration Form</h2>


                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-4">
                            <h3 class="text-lg font-medium mb-4 text-red-700">Applicant 1 Information</h3>

                            <div class="mb-4">
                                <label for="applicant_name" class="block text-gray-700 font-bold mb-2">Applicant Name
                                    *</label>
                                <input type="text" id="username" name="username"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="gender" class="block text-gray-700 font-bold mb-2">Gender *</label>
                                <select id="Gender" name="Gender"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="mykad" class="block text-gray-700 font-bold mb-2">MyKad Number *</label>
                                <input type="text" id="mykad" name="mykad"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="age" class="block text-gray-700 font-bold mb-2">Age</label>
                                <input type="number" id="Age" name="Age"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="nationality" class="block text-gray-700 font-bold mb-2">Nationality</label>
                                <input type="text" id="Nationality" name="Nationality"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="date_of_birth" class="block text-gray-700 font-bold mb-2">Date of
                                    Birth</label>
                                <input type="date" id="DateOfBirth" name="DateOfBirth"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>

                        <div class="mb-4">
                            <h3 class="text-lg font-medium mb-4 text-red-700">Applicant 2 Information</h3>

                            <div class="mb-4">
                                <label for="Username" class="block text-gray-700 font-bold mb-2">Applicant Name
                                    *</label>
                                <input type="text" id="Username" name="Username"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="Gender" class="block text-gray-700 font-bold mb-2">Gender *</label>
                                <select id="Gender" name="Gender"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="mykad" class="block text-gray-700 font-bold mb-2">MyKad Number *</label>
                                <input type="text" id="mykad" name="mykad"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="Age" class="block text-gray-700 font-bold mb-2">Age</label>
                                <input type="number" id="Age" name="Age"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="Nationality" class="block text-gray-700 font-bold mb-2">Nationality</label>
                                <input type="text" id="Nationality" name="Nationality"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-4">
                                <label for="DateOfBirth" class="block text-gray-700 font-bold mb-2">Date of
                                    Birth</label>
                                <input type="date" id="DateOfBirth" name="DateOfBirth"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="RegistrationType" class="block text-gray-700 font-bold mb-2">Type of Marriage
                            *</label>
                        <select id="RegistrationType" name="RegistrationType"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="permitted">Permitted Marriage</option>
                            <option value="voluntary">Voluntary Marriage</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-1 text-right">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit
                                Application</button>
                        </div>
                        <div class="col-span-1">
                            <button type="button"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                onclick="window.location.href='/marriageRegistrations'">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>